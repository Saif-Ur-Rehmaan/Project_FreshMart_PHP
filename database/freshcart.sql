-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 11:38 PM
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
  `C_ParentCategory` text DEFAULT NULL,
  `C_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_id`, `C_name`, `C_Logo`, `C_Status`, `C_Description`, `C_MetaTitle`, `C_MetaDescription`, `C_Slug`, `C_ParentCategory`, `C_Date`) VALUES
(0, 'Dairy, Bread & Eggs', 'dairy.svg', 0, '', '', '', 'abc', NULL, '2023-09-24'),
(1, 'Bakery & Biscuits', 'bakery.svg', 1, 'asdca', 'mtitle', 'asadsasd', 'xyz', NULL, '2023-09-24'),
(2, 'Snack & Munchies', 'snacks.svg', 1, '', '', '', '', NULL, '2023-09-24'),
(3, 'Baby Care', 'baby-food.svg', 1, '', '', '', '', '0', '2023-09-24'),
(4, 'Cold Drinks & Juices', 'wine.svg', 1, '', '', '', '', NULL, '2023-09-24'),
(5, 'Toiletries', 'toiletries.svg', 0, '', '', '', '', '0', '2023-09-24'),
(11, 'Pet Food', 'petfoods.svg', 1, 'desc for pet food\r\n\r\n', 'Pet Food,cat food , dog food ,food', 'Meta desc for pet food', 'pet-food', '2', '2023-09-24');

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
-- Stand-in structure for view `customersview`
-- (See below for the actual view)
--
CREATE TABLE `customersview` (
`_Client_id` int(11)
,`CustomerName` varchar(255)
,`Mail` varchar(255)
,`RegisterDate` date
,`ContactNo` varchar(255)
,`spend` double
);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `Dai_Id` int(11) NOT NULL,
  `Product_Id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `EndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`Dai_Id`, `Product_Id`, `created_at`, `EndDate`) VALUES
(1, 54, '2023-10-13 18:30:25', '2024-10-03'),
(2, 57, '2023-10-13 18:30:25', '2024-12-19'),
(3, 58, '2023-10-13 18:30:40', '2024-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `Mes_Id` int(11) NOT NULL,
  `_Client_Id_From` int(11) NOT NULL,
  `Messege` text NOT NULL,
  `Mes_Status` int(11) NOT NULL DEFAULT 0 COMMENT '0=unread,1=read',
  `_Client_Id_To` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`Mes_Id`, `_Client_Id_From`, `Messege`, `Mes_Status`, `_Client_Id_To`) VALUES
(1, 2, 'messege 1', 0, 1);

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
  `Ord_Status` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending,1=packeging,2=shipping,3=warehouse,4=delevering,5=success,6=Canceled\r\n',
  `Ord_Name` varchar(255) NOT NULL COMMENT 'timestamp k sath unique aaigi',
  `Ord_UnitPrice` varchar(255) DEFAULT NULL,
  `Ord_ShippingPrice` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Ord_Id`, `_Client_Id`, `_Product_Id`, `Ord_Quantity`, `Ord_Date`, `Ord_Status`, `Ord_Name`, `Ord_UnitPrice`, `Ord_ShippingPrice`) VALUES
(5, 3, 54, '2', '2022-10-01', 5, 'FC#1007', '15', 10),
(6, 3, 57, '3', '2023-09-25', 5, 'FC#1009', '35', 15);

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
  `P_ActualPrice` int(11) NOT NULL DEFAULT 0,
  `P_RegularPrice` int(11) NOT NULL DEFAULT 0,
  `P_SalePrice` int(11) NOT NULL DEFAULT 0,
  `P_MetaTitle` varchar(255) NOT NULL,
  `P_MetaDescription` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `P_IsFeatured` int(11) NOT NULL DEFAULT 0 COMMENT '0=not,1=featured'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_Id`, `P_Title`, `_Category_id`, `_Client_id`, `P_Weight`, `P_Units`, `P_Images`, `P_Description`, `P_InStock`, `P_Code`, `P_SKU`, `P_Status`, `P_ActualPrice`, `P_RegularPrice`, `P_SalePrice`, `P_MetaTitle`, `P_MetaDescription`, `Date`, `P_IsFeatured`) VALUES
(54, 'buiscit', 2, 1, '10g', '30', 'product-single-img-4.jpg ', '', 1, 'buis124', 'SBS_-ANMOL', 1, 5, 15, 0, 'sa', 'as', '2023-09-24 07:42:09', 1),
(57, 'Napolitanke Ljesnjak', 2, 1, '200g', '20', 'product-single-img-1.jpg ', 'hi', 1, 'napolitankeljesnjak845', 'NAPOL845KELJ', 1, 5, 45, 35, 'title', 'lorem ipsem', '2023-06-08 10:43:02', 0),
(58, 'popcorn', 2, 1, '250g,500g,1000g,', '10', 'product-img-1.jpg ', '', 1, '123a', 'POP-SHEL', 1, 5, 2, 0, '', '', '2023-09-24 10:54:59', 0),
(65, 'Product 2', 0, 1, '0.7', '5', 'category-cold-drinks-juices.jpg', 'Description for Product 2', 1, 'P002', 'SKU002', 1, 5, 29, 24, 'Meta Title 2', 'Meta Description 2', '2023-09-24 14:25:50', 1),
(66, 'Product 3', 0, 1, '0.6', '20', 'category-dairy-bread-eggs.jpg', 'Description for Product 3', 1, 'P003', 'SKU003', 1, 5, 12, 9, 'Meta Title 3', 'Meta Description 3', '2023-09-24 14:25:50', 1),
(67, 'Product 4', 0, 1, '0.8', '15', 'category-instant-food.jpg', 'Description for Product 4', 1, 'P004', 'SKU004', 1, 5, 39, 34, 'Meta Title 4', 'Meta Description 4', '2023-09-24 14:25:50', 0),
(68, 'Product 5', 0, 1, '0.9', '10', 'product-img-7.jpg', 'Description for Product 5', 1, 'P005', 'SKU005', 0, 5, 22, 19, 'Meta Title 5', 'Meta Description 5', '2023-09-24 14:25:50', 1),
(69, 'Product 6', 0, 1, '0.4', '25', 'product-img-3.jpg', 'Description for Product 6', 1, 'P006', 'SKU006', 1, 5, 15, 12, 'Meta Title 6', 'Meta Description 6', '2023-09-24 14:25:50', 1),
(70, 'Product 7', 0, 1, '0.7', '8', 'product-img-5.jpg', 'Description for Product 7', 1, 'P007', 'SKU007', 0, 5, 32, 27, 'Meta Title 7', 'Meta Description 7', '2023-09-24 14:25:50', 0),
(71, 'Product 8', 0, 1, '0.6', '12', 'product-img-13.jpg', 'Description for Product 8', 1, 'P008', 'SKU008', 0, 5, 27, 22, 'Meta Title 8', 'Meta Description 8', '2023-09-24 14:25:50', 0),
(72, 'Product 9', 0, 1, '0.3', '30', 'product-img-13.jpg', 'Description for Product 9', 1, 'P009', 'SKU009', 1, 5, 18, 14, 'Meta Title 9', 'Meta Description 9', '2023-09-24 14:25:50', 1),
(73, 'Product 10', 0, 1, '0.8', '18', 'product-img-13.jpg', 'Description for Product 10', 1, 'P010', 'SKU010', 0, 5, 37, 32, 'Meta Title 10', 'Meta Description 10', '2023-09-24 14:25:50', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reviewsofcustomersview`
-- (See below for the actual view)
--
CREATE TABLE `reviewsofcustomersview` (
`_Client_Id` int(11)
,`_Product_id` int(11)
,`ProductName` varchar(255)
,`CustomerName` varchar(255)
,`CustomerComment` varchar(255)
,`RatingStar` int(11)
,`DateOfReview` date
);

-- --------------------------------------------------------

--
-- Table structure for table `reviews_products`
--

CREATE TABLE `reviews_products` (
  `Rev_Id` int(11) NOT NULL,
  `_Client_Id` int(11) NOT NULL,
  `_Product_id` int(11) NOT NULL,
  `Rev_Star` int(11) NOT NULL,
  `Rev_Comment` varchar(255) NOT NULL,
  `Rev_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews_products`
--

INSERT INTO `reviews_products` (`Rev_Id`, `_Client_Id`, `_Product_id`, `Rev_Star`, `Rev_Comment`, `Rev_Date`) VALUES
(1, 2, 58, 5, 'Nice & fresh oranges with value for money..', '2023-10-02');

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
-- Stand-in structure for view `searchorderview`
-- (See below for the actual view)
--
CREATE TABLE `searchorderview` (
`_Product_Id` int(11)
,`_Client_Id` int(11)
,`Ord_Name` varchar(255)
,`Ord_Status` int(11)
,`Ord_Date` date
,`P_Images` text
,`Cli_DisplayName` varchar(255)
,`Use_PaymentMethod` varchar(255)
,`Totalamount` double
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
  `Sel_Image` varchar(255) NOT NULL DEFAULT 'Seller.jpg',
  `Sel_RegistrationDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`Sel_Id`, `_Client_Id`, `Sel_StoreName`, `Sel_Store_Address`, `Sel_ContactNo`, `Sel_Image`, `Sel_RegistrationDate`) VALUES
(1, 3, 'E-Grocery Super Market', 'abc street , karachi ,pakistan', '123456879', 'stores-logo-1.svg', '2023-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Use_Id` int(11) NOT NULL,
  `_Client_Id` int(11) NOT NULL,
  `Use_ContactNo` varchar(255) DEFAULT NULL,
  `Use_Address` varchar(255) DEFAULT NULL,
  `Use_image` varchar(255) DEFAULT 'UserDefault.jpg',
  `Use_PaymentMethod` varchar(255) DEFAULT NULL,
  `Use_RegistrationDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Use_Id`, `_Client_Id`, `Use_ContactNo`, `Use_Address`, `Use_image`, `Use_PaymentMethod`, `Use_RegistrationDate`) VALUES
(1, 2, '03365584244', 'abc street ,lahore,pakistan', 'UserDefault.jpg', 'PayPal', '2023-10-01');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vendorsorsellers`
-- (See below for the actual view)
--
CREATE TABLE `vendorsorsellers` (
`Sel_Id` int(11)
,`Mail` varchar(255)
,`Sel_StoreName` varchar(255)
,`Sel_ContactNo` varchar(255)
,`Sel_Image` varchar(255)
,`TotalStoreSell` double
,`Earning` double
);

-- --------------------------------------------------------

--
-- Structure for view `customersview`
--
DROP TABLE IF EXISTS `customersview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customersview`  AS SELECT `clients`.`Cli_Id` AS `_Client_id`, `clients`.`Cli_DisplayName` AS `CustomerName`, `clients`.`Cli_Mail` AS `Mail`, (select `users`.`Use_RegistrationDate` from `users` where `users`.`_Client_Id` = `clients`.`Cli_Id`) AS `RegisterDate`, (select `users`.`Use_ContactNo` from `users` where `users`.`_Client_Id` = `clients`.`Cli_Id`) AS `ContactNo`, (select sum(`orders`.`Ord_Quantity` * `orders`.`Ord_UnitPrice`) from `orders` where `orders`.`Ord_Status` <> 6 and `orders`.`_Client_Id` = `clients`.`Cli_Id`) AS `spend` FROM `clients` WHERE `clients`.`Cli_Role` = 11  ;

-- --------------------------------------------------------

--
-- Structure for view `reviewsofcustomersview`
--
DROP TABLE IF EXISTS `reviewsofcustomersview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reviewsofcustomersview`  AS SELECT `reviews_products`.`_Client_Id` AS `_Client_Id`, `reviews_products`.`_Product_id` AS `_Product_id`, (select `products`.`P_Title` from `products` where `products`.`P_Id` = `reviews_products`.`_Product_id`) AS `ProductName`, (select `clients`.`Cli_DisplayName` from `clients` where `clients`.`Cli_Id` = `reviews_products`.`_Client_Id`) AS `CustomerName`, `reviews_products`.`Rev_Comment` AS `CustomerComment`, `reviews_products`.`Rev_Star` AS `RatingStar`, `reviews_products`.`Rev_Date` AS `DateOfReview` FROM `reviews_products``reviews_products`  ;

-- --------------------------------------------------------

--
-- Structure for view `searchcatview`
--
DROP TABLE IF EXISTS `searchcatview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `searchcatview`  AS SELECT `c`.`C_id` AS `C_id`, `c`.`C_name` AS `C_name`, `c`.`C_Logo` AS `C_Logo`, `c`.`C_Status` AS `C_Status`, `c`.`C_Description` AS `C_Description`, `c`.`C_MetaTitle` AS `C_MetaTitle`, `c`.`C_MetaDescription` AS `C_MetaDescription`, `c`.`C_Slug` AS `C_Slug`, `c`.`C_ParentCategory` AS `C_ParentCategory`, `c`.`C_Date` AS `C_Date`, coalesce(`pc`.`ProductCount`,0) AS `ProductCount` FROM (`categories` `c` left join (select `products`.`_Category_id` AS `_Category_id`,count(`products`.`P_Id`) AS `ProductCount` from `products` group by `products`.`_Category_id`) `pc` on(`c`.`C_id` = `pc`.`_Category_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `searchorderview`
--
DROP TABLE IF EXISTS `searchorderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `searchorderview`  AS SELECT `o`.`_Product_Id` AS `_Product_Id`, `o`.`_Client_Id` AS `_Client_Id`, `o`.`Ord_Name` AS `Ord_Name`, `o`.`Ord_Status` AS `Ord_Status`, `o`.`Ord_Date` AS `Ord_Date`, `p`.`P_Images` AS `P_Images`, `c`.`Cli_DisplayName` AS `Cli_DisplayName`, `u`.`Use_PaymentMethod` AS `Use_PaymentMethod`, (select case when `products`.`P_SalePrice` is not null and `products`.`P_SalePrice` <> '' then `products`.`P_SalePrice` else `products`.`P_RegularPrice` end from `products` where `products`.`P_Id` = `o`.`_Product_Id`) * (select `orders`.`Ord_Quantity` from `orders` where `orders`.`Ord_Id` = `o`.`Ord_Id`) AS `Totalamount` FROM (((`orders` `o` join `products` `p` on(`p`.`P_Id` = `o`.`_Product_Id`)) join `clients` `c` on(`c`.`Cli_Id` = `o`.`_Client_Id`)) join `users` `u` on(`u`.`_Client_Id` = `o`.`_Client_Id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vendorsorsellers`
--
DROP TABLE IF EXISTS `vendorsorsellers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vendorsorsellers`  AS SELECT (select `sellers`.`Sel_Id` from `sellers` where `sellers`.`_Client_Id` = `clients`.`Cli_Id`) AS `Sel_Id`, `clients`.`Cli_Mail` AS `Mail`, (select `sellers`.`Sel_StoreName` from `sellers` where `sellers`.`_Client_Id` = `clients`.`Cli_Id`) AS `Sel_StoreName`, (select `sellers`.`Sel_ContactNo` from `sellers` where `sellers`.`_Client_Id` = `clients`.`Cli_Id`) AS `Sel_ContactNo`, (select `sellers`.`Sel_Image` from `sellers` where `sellers`.`_Client_Id` = `clients`.`Cli_Id`) AS `Sel_Image`, (select sum(`orders`.`Ord_Quantity` * `orders`.`Ord_UnitPrice`) from `orders` where `orders`.`_Client_Id` = `clients`.`Cli_Id`) AS `TotalStoreSell`, (select sum(`orders`.`Ord_Quantity` * `orders`.`Ord_UnitPrice`) from `orders` where `orders`.`_Client_Id` = `clients`.`Cli_Id`) - (select sum(`orders`.`Ord_Quantity` * (select `products`.`P_ActualPrice` from `products` where `products`.`P_Id` = `orders`.`_Product_Id`)) from `orders` where `orders`.`_Client_Id` = `clients`.`Cli_Id`) AS `Earning` FROM `clients` WHERE `clients`.`Cli_Role` = 22  ;

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
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`Dai_Id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`Mes_Id`),
  ADD KEY `FK_msCliId_from` (`_Client_Id_From`),
  ADD KEY `FK_msCliId_fo` (`_Client_Id_To`);

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
-- Indexes for table `reviews_products`
--
ALTER TABLE `reviews_products`
  ADD PRIMARY KEY (`Rev_Id`),
  ADD KEY `clientid` (`_Client_Id`),
  ADD KEY `productid` (`_Product_id`);

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
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Cli_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `Dai_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `Mes_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Ord_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `reviews_products`
--
ALTER TABLE `reviews_products`
  MODIFY `Rev_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `Use_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `FK_Role` FOREIGN KEY (`Cli_Role`) REFERENCES `roles` (`Rol_Id`);

--
-- Constraints for table `messeges`
--
ALTER TABLE `messeges`
  ADD CONSTRAINT `FK_msCliId_fo` FOREIGN KEY (`_Client_Id_To`) REFERENCES `clients` (`Cli_Id`),
  ADD CONSTRAINT `FK_msCliId_from` FOREIGN KEY (`_Client_Id_From`) REFERENCES `clients` (`Cli_Id`);

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
-- Constraints for table `reviews_products`
--
ALTER TABLE `reviews_products`
  ADD CONSTRAINT `clientid` FOREIGN KEY (`_Client_Id`) REFERENCES `clients` (`Cli_Id`),
  ADD CONSTRAINT `productid` FOREIGN KEY (`_Product_id`) REFERENCES `products` (`P_Id`);

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

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `UpdateColumnDaily` ON SCHEDULE EVERY 1 DAY STARTS '2023-10-15 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    -- Define variables to store the random product ID and the current timestamp
    DECLARE randomProductId INT;
    DECLARE currentTimestamp TIMESTAMP;

    -- Generate a random product ID not in discounts.Product_Id
    SELECT P_Id INTO randomProductId
    FROM products
    WHERE P_Id NOT IN (SELECT Product_Id FROM discounts)
    ORDER BY RAND()
    LIMIT 1;

    -- Set the current timestamp
    SET currentTimestamp = NOW();

    -- Update the discounts table
    UPDATE discounts
    SET Product_Id = randomProductId,
        EndDate = CURRENT_DATE + INTERVAL 1 DAY,
        created_at = NOW()
    WHERE 1;  -- Condition to update all rows or specify your conditions
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
