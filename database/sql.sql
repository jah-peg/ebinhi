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


CREATE TABLE `final_ecomm`.`products` ( 
   `id` INT NOT NULL AUTO_INCREMENT , 
   `title` VARCHAR(255) NOT NULL , 
   `summary` TEXT NOT NULL , 
   `description` TEXT NOT NULL , 
   `stock` INT NOT NULL , 
   `category_id` INT NOT NULL , 
   `photo` VARCHAR(255) NOT NULL , 
   `price` FLOAT NOT NULL , 
   `vendor_id` INT NOT NULL , 
   `status` ENUM('Active','Inactive') NOT NULL DEFAULT 'Active' , 
   `created_at` INT NOT NULL DEFAULT CURRENT_TIMESTAMP , 
   `updated_at` INT NULL DEFAULT NULL , 
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;


ALTER TABLE `products` ADD INDEX(`vendor_id`);

ALTER TABLE `products` ADD CONSTRAINT `fk_vendor_id` FOREIGN KEY (`vendor_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `products` ADD INDEX(`category_id`);

ALTER TABLE `products` ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



CREATE TABLE `final_ecomm`.`google_fa` ( 
   `id` INT(11) NOT NULL AUTO_INCREMENT , 
   `user_id` INT(11) NOT NULL , 
   `secret_code` VARCHAR(255) NOT NULL , 
   `pin` VARCHAR(255) NOT NULL , 
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE `google_fa` ADD INDEX(`user_id`);
ALTER TABLE `google_fa` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


CREATE TABLE `final_ecomm`.`shopping_order` ( 
   `id` INT(11) NOT NULL AUTO_INCREMENT , 
   `customer_id` INT(11) NOT NULL , 
   `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE `shopping_order` ADD UNIQUE(`customer_id`);
ALTER TABLE `shopping_order` ADD CONSTRAINT `FK` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


CREATE TABLE `final_ecomm`.`deliveries` ( `delivery_id` INT(11) NOT NULL AUTO_INCREMENT , `customer_id` INT(11) NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`delivery_id`)) ENGINE = InnoDB;

ALTER TABLE `deliveries` ADD UNIQUE(`customer_id`);

ALTER TABLE `deliveries` ADD CONSTRAINT `customer_delivery_id` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


CREATE TABLE `final_ecomm`.`payment` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `category_id` INT(11) NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `payment` ADD CONSTRAINT `category_payment_fk` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



CREATE TABLE `final_ecomm`.`transaction_reports` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `customer_id` INT(11) NOT NULL , `order_id` INT(11) NOT NULL , `product_id` INT(11) NOT NULL , `payment_id` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `transaction_reports` ADD INDEX(`customer_id`);

ALTER TABLE `transaction_reports` ADD INDEX(`order_id`, `product_id`, `payment_id`);

ALTER TABLE `transaction_reports` ADD FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `transaction_reports` ADD FOREIGN KEY (`order_id`) REFERENCES `shopping_order`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `transaction_reports` ADD FOREIGN KEY (`payment_id`) REFERENCES `payment`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `transaction_reports` ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



CREATE TABLE `final_ecomm`.`cart` ( `id` INT NOT NULL AUTO_INCREMENT , `product_id` INT NOT NULL , `user_id` INT NOT NULL , `status` INT NOT NULL , `quantity` INT NOT NULL , `amount` INT NOT NULL , `subtotal` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `cart` CHANGE `status` `status` ENUM('processing','delivery','finished') NOT NULL DEFAULT 'processing';



ALTER TABLE `cart` ADD INDEX(`product_id`, `user_id`);

ALTER TABLE `cart` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `cart` ADD FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

