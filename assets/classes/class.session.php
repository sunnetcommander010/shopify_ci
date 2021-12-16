<?php
/***************************************************
 Custom Session Handler Class
 By Joe Penn
 Copyright (c) 2003 Joe Penn
 Email bugs/suggestions to jpenn@cheetah-soft.com
 ---------------------------------------------------
 This script has been created and released under
 the GNU GPL and is free to use and redistribute
 only if this copyright statement is not removed
***************************************************/
class session
{
	var $resource;
	function session( $options )
	{
		$this->error 				= ( bool )false;
		$this->sh_sid 				= $options['sh_sid'];
		$this->db['host'] 			= $options['host'];
		$this->db['user'] 			= $options['user'];
		$this->db['pass'] 			= $options['pass'];
		$this->db['dbas'] 			= $options['dbas'];
		$this->db['ss_table']		= $options['db_ss_table'];
		$this->db['id_field'] 		= $options['db_id_field'];
		$this->db['ex_field'] 		= $options['db_ex_field'];
		$this->db['dt_field'] 		= $options['db_dt_field'];
		$this->db['connection']		= $options['db_connection'];
		$this->sess['expire'] 		= $options['sess_expire'];
		$this->sess['name']			= $options['sess_name'];
		$this->sess['cookies']	 	= $options['sess_use_cookies'];
		$this->sess['only_cookies']	= $options['sess_only_cookies'];
		$this->sess['probability']	= $options['sess_probability'];
		$this->sess['sid_len']		= $options['sess_len'];
		$this->set_ini();
		session_set_save_handler( array( &$this, 'open' ), array( &$this, 'close' ), array( &$this, 'read' ), array( &$this, 'write' ), array( &$this, 'destroy' ), array( &$this, 'gc' ) );
		if ( ( !isset( $_REQUEST[$this->sess['name']] ) ) && ( $this->sh_sid ) )
		{
			session_id( $this->new_sid() );
			session_start();
		}
		else
		{
			session_start();
		}
	}
	function set_ini()
	{
		ini_set( 'session.save_handler', 'user' );
		ini_set( 'session.name', $this->sess['name'] );
		ini_set( 'session.use_cookies', $this->sess['cookies'] );
		ini_set( 'session.gc_maxlifetime', $this->sess['expire'] );
		ini_set( 'session.gc_probability', $this->sess['probability'] );
		ini_set( 'session.use_only_cookies', $this->sess['only_cookies'] );
	}
	function open( $a, $b )
	{
		$this->resource = @$this->db['connection']( $this->db['host'], $this->db['user'], $this->db['pass'] ) or
		$this->error .= mysql_error();
		@mysql_select_db( $this->db['dbas'] ) or $this->error .= 'Could Not Select DB';
		return( $this->error );
	}
	function close()
	{
		return( ( bool )true );
	}
	function read( $id )
	{
		$query = @mysql_query( "SELECT * FROM " . $this->db['ss_table'] . " WHERE " . $this->db['id_field'] . " = '" . $id . "' AND " . $this->db['ex_field'] . " > '" . time() . "'" );
		if ( @mysql_num_rows( $query ) > ( int )0 )
		{
			$info = @mysql_fetch_assoc( $query );
			return( $info[$this->db['dt_field']] );
		}
		else
		{
			return( ( bool )false );
		}
	}
	function write( $id, $data )
	{
		$seconds = $this->sess['expire'] * 60;
		$expires = time() + $seconds;
		$_q = "SELECT " . $this->db['id_field'] . " FROM " . $this->db['ss_table'] . " WHERE " . $this->db['id_field'] . " = '" . session_id() . "'";
		$result = @mysql_query( $_q, $this->resource );
		if ( !@mysql_num_rows( $result ) )
		{
			$query = "INSERT INTO " . $this->db['ss_table'] . " VALUES( '" . $id . "', '" . $expires . "', '" . $data . "' )";
		}
		else
		{
			$query = "UPDATE " . $this->db['ss_table'] . " SET " . $this->db['ex_field'] . " = '" . $expires . "', " . $this->db['dt_field'] . " = '" . $data . "' WHERE " . $this->db['id_field'] . " = '" . $id . "' AND " . $this->db['ex_field'] . " > " . time();
		}
		return ( @mysql_query( $query, $this->resource ) );
	}
	
        function destroy( $id )
	{
		$query = "DELETE FROM " . $this->db['ss_table'] . " WHERE " . $this->db['id_field'] . " = '" . $id . "'";
		if ( isset( $_COOKIE[$this->sess['name']] ) )
		{
			unset( $_COOKIE[$this->sess['name']] );
		}
		return( @mysql_query( $query, $this->resource ) );
	}
	
        function gc( $a )
	{
		$query = "DELETE FROM " . $this->db['ss_table'] . " WHERE " . $this->db['ex_field'] . " < '" . time() . "'";
		return( @mysql_query( $query, $this->resource ) );
	}
	function connection_error()
	{
		return( $this->error );
	}
	function new_sid()
	{
		$_sid = ( bool )false;
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$count = ( int )strlen( $chars );
		for( $i = ( int )0; $i < $this->sess['sid_len']; $i++ )
		{
    		$_sid .= $chars[ mt_rand( ( int )0, $count - ( int )1 ) ];
		}
		return( $_sid );
	}
}
?>
