

/* db statements */

CREATE TABLE `Product`(
	`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`sku` varchar(255),
	`barcode` varchar(255),
	`name` varchar(255),
	`price` float,
	`unit` varchar(255),
	`quantity` float,
	`minquantity` float,
	`createdAt` datetime NOT NULL,
	`updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`failyid` int(11) NOT NULL,
	`locationid` int(11) NOT NULL
);

CREATE TABLE `Family`(
	`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`refrence` varchar(255),
	`name` varchar(255),
	`createdAt` datetime NOT NULL,
	`updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `Transaction`(
	`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`comment` text,
	`price` float,
	`quantity` float,
	`reason` enum('New Stock', 'Usable Return', 'Unusable Return'),
	`createdAt` datetime NOT NULL,
	`updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`productid` int(11) NOT NULL
);

CREATE TABLE `Location`(
	`id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`refrence` varchar(255),
	`description` text,
	`createdAt` datetime NOT NULL,
	`updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);