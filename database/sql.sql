-- create a table in the database 

-- CREATE TABLE IF NOT EXISTS `users` (

--    'id' bigint(20) PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    'full_name' varchar(255) NOT NULL,
--    'username' varchar(255) NOT NULL,
--    'email' varchar(255) NOT NULL,
--    'password' varchar(255) NOT NULL,
--    'photo' varchar(255) NOT NULL,
--    'phone' varchar(255) NOT NULL,
--    'address' varchar(255) NOT NULL,
--    'role' enum('admin', 'vendor', 'customer') DEFAULT 'customer',
--    'status' enum('active', 'inactive') DEFAULT 'active',
--    'created_at' timestamp() NOT NULL,
--    'updated_at' timestamp() NOT NULL

-- );


CREATE TABLE `final_ecomm`.`users` ( 
   `id` BIGINT(20) NOT NULL AUTO_INCREMENT , 
   `full_name` VARCHAR(255) NOT NULL , 
   `username` VARCHAR(255) NOT NULL , 
   `email` VARCHAR(255) NOT NULL , 
   `password` VARCHAR(255) NOT NULL , 
   `photo` VARCHAR(255) NULL , 
   `phone` VARCHAR(255) NULL , 
   `address` VARCHAR(255) NULL , 
   `role` ENUM('admin','vendor','customer') NULL DEFAULT 'customer' , 
   `status` ENUM('active','inactive') NOT NULL DEFAULT 'active' , 
   `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
   `updated_at` TIMESTAMP NULL DEFAULT NULL ,
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;



CREATE TABLE `final_ecomm`.`categories` ( 
   `id` INT NOT NULL AUTO_INCREMENT , 
   `parent_id` INT NOT NULL DEFAULT '0' , 
   `category` VARCHAR(255) NOT NULL , 
   `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
   `updated_at` TIMESTAMP NULL DEFAULT NULL , 
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;