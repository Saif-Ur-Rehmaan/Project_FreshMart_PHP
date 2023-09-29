-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 10:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `C_id` int(11) NOT NULL,
  `C_name` varchar(255) NOT NULL,
  `C_Logo` varchar(255) NOT NULL DEFAULT 'defaultlogo.jpeg',
  `C_Status` int(11) NOT NULL DEFAULT 0,
  `C_Description` text NOT NULL,
  `C_MetaTitle` varchar(255) NOT NULL,
  `C_MetaDescription` text NOT NULL,
  `C_Slug` varchar(255) NOT NULL,
  `C_ParentCategory` text NOT NULL,
  `C_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_id`, `C_name`, `C_Logo`, `C_Status`, `C_Description`, `C_MetaTitle`, `C_MetaDescription`, `C_Slug`, `C_ParentCategory`, `C_Date`) VALUES
(0, 'Dairy, Bread & Eggs', 'dairy.svg', 0, '', '', '', 'abc', '0', '2023-09-24'),
(1, 'Bakery & Biscuits', 'bakery.svg', 1, 'asdca', 'mtitle', 'asadsasd', 'xyz', '0', '2023-09-24'),
(2, 'Snack & Munchies', 'snacks.svg', 1, '', '', '', '', '0', '2023-09-24'),
(3, 'Baby Care', 'baby-food.svg', 1, '', '', '', '', '0', '2023-09-24'),
(4, 'Cold Drinks & Juices', 'wine.svg', 1, '', '', '', '', '0', '2023-09-24'),
(5, 'Toiletries', 'toiletries.svg', 0, '', '', '', '', '0', '2023-09-24'),
(11, 'Pet Food', 'petfoods.svg', 1, 'desc for pet food\r\n\r\n', 'Pet Food,cat food , dog food ,food', 'Meta desc for pet food', 'pet-food', 'Parent Category Name', '2023-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Cli_Id` int(11) NOT NULL,
  `Cli_Role` int(11) NOT NULL,
  `Cli_DisplayName` varchar(255) NOT NULL,
  `Cli_Mail` varchar(255) NOT NULL,
  `Cli_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Cli_Id`, `Cli_Role`, `Cli_DisplayName`, `Cli_Mail`, `Cli_Password`) VALUES
(1, 3, 'Saif-Ur-Rehman', 'Saif@gmail.com', 'example123'),
(2, 1, 'Ahmed Raza', 'Ahmed524@gmail.com', 'ahmed123'),
(3, 2, 'Seller1', 'Seller1@gmail.com', 'Seller1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Ord_Id` int(11) NOT NULL,
  `_Client_Id` int(11) NOT NULL,
  `_Product_Id` int(11) NOT NULL,
  `Ord_Quantity` varchar(255) NOT NULL,
  `Ord_Date` date NOT NULL DEFAULT current_timestamp(),
  `Ord_Status` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending,1=packeging,2=shipping,3=warehouse,4=delevering,5=success\r\n',
  `Ord_Name` varchar(255) NOT NULL COMMENT 'timestamp k sath unique aaigi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Ord_Id`, `_Client_Id`, `_Product_Id`, `Ord_Quantity`, `Ord_Date`, `Ord_Status`, `Ord_Name`) VALUES
(5, 2, 54, '2', '2005-12-12', 0, 'FC#1007'),
(6, 2, 57, '1', '2005-12-20', 5, 'FC#1009');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_Id` int(11) NOT NULL,
  `P_Title` varchar(255) NOT NULL,
  `_Category_id` int(11) NOT NULL,
  `_Client_id` int(11) NOT NULL,
  `P_Weight` varchar(255) NOT NULL,
  `P_Units` varchar(255) NOT NULL,
  `P_Images` text NOT NULL,
  `P_Description` text NOT NULL,
  `P_InStock` int(11) NOT NULL,
  `P_Code` varchar(255) NOT NULL,
  `P_SKU` varchar(255) NOT NULL,
  `P_Status` int(11) NOT NULL,
  `P_RegularPrice` varchar(255) NOT NULL,
  `P_SalePrice` varchar(255) NOT NULL,
  `P_MetaTitle` varchar(255) NOT NULL,
  `P_MetaDescription` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_Id`, `P_Title`, `_Category_id`, `_Client_id`, `P_Weight`, `P_Units`, `P_Images`, `P_Description`, `P_InStock`, `P_Code`, `P_SKU`, `P_Status`, `P_RegularPrice`, `P_SalePrice`, `P_MetaTitle`, `P_MetaDescription`, `Date`) VALUES
(54, 'buiscit', 2, 1, '10g', '30', 'product-single-img-4.jpg ', '', 1, 'buis124', 'SBS_-ANMOL', 1, '15', '5', 'sa', 'as', '2023-09-24 07:42:09'),
(57, 'Napolitanke Ljesnjak', 2, 1, '200g', '20', 'product-single-img-1.jpg ', 'hi', 1, 'napolitankeljesnjak845', 'NAPOL845KELJ', 1, '25', '35', 'title', 'lorem ipsem', '2023-06-08 10:43:02'),
(58, 'popcorn', 2, 1, '250g,500g,1000g,', '10', 'product-img-1.jpg ', '', 1, '123a', 'POP-SHEL', 1, '2', '', '', '', '2023-09-24 10:54:59'),
(65, 'Product 2', 0, 1, '0.7', '5', 'product2.jpg', 'Description for Product 2', 1, 'P002', 'SKU002', 1, '29.99', '24.99', 'Meta Title 2', 'Meta Description 2', '2023-09-24 14:25:50'),
(66, 'Product 3', 0, 1, '0.6', '20', 'product3.jpg', 'Description for Product 3', 1, 'P003', 'SKU003', 1, '12.99', '9.99', 'Meta Title 3', 'Meta Description 3', '2023-09-24 14:25:50'),
(67, 'Product 4', 0, 1, '0.8', '15', 'product4.jpg', 'Description for Product 4', 1, 'P004', 'SKU004', 1, '39.99', '34.99', 'Meta Title 4', 'Meta Description 4', '2023-09-24 14:25:50'),
(68, 'Product 5', 0, 1, '0.9', '10', 'product5.jpg', 'Description for Product 5', 1, 'P005', 'SKU005', 0, '22.99', '19.99', 'Meta Title 5', 'Meta Description 5', '2023-09-24 14:25:50'),
(69, 'Product 6', 0, 1, '0.4', '25', 'product6.jpg', 'Description for Product 6', 1, 'P006', 'SKU006', 1, '15.99', '12.99', 'Meta Title 6', 'Meta Description 6', '2023-09-24 14:25:50'),
(70, 'Product 7', 0, 1, '0.7', '8', 'product7.jpg', 'Description for Product 7', 1, 'P007', 'SKU007', 0, '32.99', '27.99', 'Meta Title 7', 'Meta Description 7', '2023-09-24 14:25:50'),
(71, 'Product 8', 0, 1, '0.6', '12', 'product8.jpg', 'Description for Product 8', 1, 'P008', 'SKU008', 0, '27.99', '22.99', 'Meta Title 8', 'Meta Description 8', '2023-09-24 14:25:50'),
(72, 'Product 9', 0, 1, '0.3', '30', 'product9.jpg', 'Description for Product 9', 1, 'P009', 'SKU009', 1, '18.99', '14.99', 'Meta Title 9', 'Meta Description 9', '2023-09-24 14:25:50'),
(73, 'Product 10', 0, 1, '0.8', '18', 'product10.jpg', 'Description for Product 10', 1, 'P010', 'SKU010', 0, '37.99', '32.99', 'Meta Title 10', 'Meta Description 10', '2023-09-24 14:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Rol_Id` int(11) NOT NULL,
  `Rol_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Rol_Id`, `Rol_Name`) VALUES
(1, 'User'),
(2, 'Seller'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `searchcatview`
-- (See below for the actual view)
--
CREATE TABLE `searchcatview` (
`C_id` int(11)
,`C_name` varchar(255)
,`C_Logo` varchar(255)
,`C_Status` int(11)
,`C_Description` text
,`C_MetaTitle` varchar(255)
,`C_MetaDescription` text
,`C_Slug` varchar(255)
,`C_ParentCategory` text
,`C_Date` date
,`ProductCount` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `Sel_Id` int(11) NOT NULL,
  `_Client_Id` int(11) NOT NULL,
  `Sel_StoreName` varchar(255) NOT NULL,
  `Sel_Store_Address` varchar(255) NOT NULL,
  `Sel_ContactNo` varchar(255) NOT NULL,
  `Sel_Image` varchar(255) NOT NULL DEFAULT 'Seller.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`Sel_Id`, `_Client_Id`, `Sel_StoreName`, `Sel_Store_Address`, `Sel_ContactNo`, `Sel_Image`) VALUES
(1, 1, 'Fresh Mart', 'abc street , karachi ,pakistan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Use_Id` int(11) NOT NULL,
  `_Client_Id` int(11) NOT NULL,
  `Use_ContactNo` varchar(255) NOT NULL,
  `Use_Address` varchar(255) NOT NULL,
  `Use_image` varchar(255) NOT NULL DEFAULT 'UserDefault.jpg',
  `Use_PaymentMethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Use_Id`, `_Client_Id`, `Use_ContactNo`, `Use_Address`, `Use_image`, `Use_PaymentMethod`) VALUES
(1, 2, '03365584244', 'abc street ,lahore,pakistan', 'UserDefault.jpg', 'PayPal');

-- --------------------------------------------------------

--
-- Structure for view `searchcatview`
--
DROP TABLE IF EXISTS `searchcatview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `searchcatview`  AS SELECT `c`.`C_id` AS `C_id`, `c`.`C_name` AS `C_name`, `c`.`C_Logo` AS `C_Logo`, `c`.`C_Status` AS `C_Status`, `c`.`C_Description` AS `C_Description`, `c`.`C_MetaTitle` AS `C_MetaTitle`, `c`.`C_MetaDescription` AS `C_MetaDescription`, `c`.`C_Slug` AS `C_Slug`, `c`.`C_ParentCategory` AS `C_ParentCategory`, `c`.`C_Date` AS `C_Date`, coalesce(`pc`.`ProductCount`,0) AS `ProductCount` FROM (`categories` `c` left join (select `products`.`_Category_id` AS `_Category_id`,count(`products`.`P_Id`) AS `ProductCount` from `products` group by `products`.`_Category_id`) `pc` on(`c`.`C_id` = `pc`.`_Category_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Cli_Id`),
  ADD KEY `FK_Role` (`Cli_Role`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Ord_Id`),
  ADD KEY `orders` (`_Client_Id`),
  ADD KEY `fk_product` (`_Product_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_Id`),
  ADD KEY `FK_Cat` (`_Category_id`),
  ADD KEY `FK_Client_id` (`_Client_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Rol_Id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`Sel_Id`),
  ADD KEY `sellers` (`_Client_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Use_Id`),
  ADD KEY `users` (`_Client_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Cli_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Ord_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Rol_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `Sel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Use_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `FK_Role` FOREIGN KEY (`Cli_Role`) REFERENCES `roles` (`Rol_Id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_Product_id` FOREIGN KEY (`_Product_id`) REFERENCES `products` (`P_Id`),
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`_Product_id`) REFERENCES `products` (`P_Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_Cat` FOREIGN KEY (`_Category_id`) REFERENCES `categories` (`C_id`),
  ADD CONSTRAINT `FK_Client_id` FOREIGN KEY (`_Client_id`) REFERENCES `clients` (`Cli_Id`);

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers` FOREIGN KEY (`_Client_Id`) REFERENCES `clients` (`Cli_Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users` FOREIGN KEY (`_Client_Id`) REFERENCES `clients` (`Cli_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
