<?php

/* Configuration File */

class Config
{
    // Database Connection
    public static $db_host      = 'localhost';
    public static $db_id        = 'root';
    public static $db_pw        = '';
    public static $db_name      = 'login';
    
    // Logo File Location
    public static $logo_path    = 'path here';
    
    // Table Name and Column for Insert
    public static $tb_name      = 'hero';
    public static $col_name     = array ('hero','description_of_hero','file');
    
    // Title of Modal
    public static $modal_title  = 'Add new Hero';
    
    // Global Text input limit
    public static $max_lg_limit = 100;
    
    // Image Path Save
    public static $Save_to      = 'images/';
    
    public static $Return_to    = 'http://localhost/WebsiteAssignment';
    
}