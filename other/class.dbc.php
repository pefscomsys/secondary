<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class dbc
{
    //put your code here

    // Get the variables for database connection
    /*************************
     * @param database_name contains the value of the database name
     */
    private $db_name = 'osecondary';


    /**
     * @param user This is the user of the database
     */
    var $db_user = 'root';


    /**
     * @param password Contains the host of the database
     */
    var $db_password = '';

    /******************************
     * @param host. Constains the host of the datbase
     */
    var $db_host = 'localhost';

    public function connect ()
    {
        return $connect = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
    }

    /**
     * @param close connection  $close This closes the current database connection
     */
    public function close($dbc)
    {
       $close = mysqli_close($dbc);
    }

}
