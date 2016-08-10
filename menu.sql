SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fuji`
--

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `category` enum('Lunch Specials','Appetizers','Soups and Salads','Dinner Entrees','Signature Dishes','Rice Dishes','Nigiri','Sashimi','Sushi Combo','Small Rolls','Chef Special Rolls','Side Dishes','Sushi Rolls','Sweet Treats','Teriyaki and Tempura Combinations','Katsu and Donburi Entrees') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`id`, `title`, `description`, `price`, `category`) VALUES
(1, 'Gyoza (6 pcs)', 'Fried Japanese Dumplings accompanied with a light tempura sauce.', '4.95', 'Appetizers'),
(2, 'Edamame - Plain or Spicy', 'Steamed soy beans sprinkled with salt served hot.', '3.25', 'Appetizers'),
(3, 'Tempura Shrimp (6 pcs)', 'Dipped in tempura batter, deep fried, and served with a light tempura sauce.', '6.25', 'Appetizers'),
(4, 'Golden Calamari', 'Tempura battered deep fried calamari served with special sauce.', '5.25', 'Appetizers'),
(5, 'Tempura Vegatables (6 pcs)', 'Lightly fried tempura battered vegetables served with tempura sauce.', '5.25', 'Appetizers'),
(6, 'Spring Egg Rolls (2 pcs)', 'Veggie spring rolls lightly fried to a golden crisp', '3.25', 'Appetizers'),
(7, 'Sushi App/Sampler', '4 pieces of a California Roll & 4 pieces of chef choice nigiri.', '7.25', 'Appetizers'),
(8, 'Love Heart App', 'Spicy tuna and crab salad shaped into 2 hearts served with special sauce', '6.25', 'Appetizers'),
(9, 'The Eagle', '4 pieces of tempura battered sushi containing salmon, shrimp, cream cheese, and drizzled with eel sauce and spicy mayo.', '7.25', 'Appetizers'),
(10, 'Miso Soup', 'contains seaweed, tofu, scallions, and mushrooms.', '1.55', 'Soups and Salads'),
(11, 'Seaweed Salad', 'refreshing marinated seaweed.', '3.95', 'Soups and Salads'),
(12, 'House Ginger Salad', 'served with our made-in-house ginger-dressing', '2.25', 'Soups and Salads'),
(13, 'Sunomono Salad', 'sliced cucumber and mixed baby greens topped with crab and shrimp tossed in a tangy dressing.', '3.95', 'Soups and Salads'),
(14, 'Beef Tataki', 'Thinly sliced seared beef served with a refreshing ponzu sauce.', '10.95', 'Signature Dishes'),
(15, 'Tuna Tataki', 'Thinly sliced seared tuna served with a refreshing ponzu sauce.', '11.95', 'Signature Dishes'),
(16, 'Tuna Lover', 'Diced tuna, white tuna, and avocado served over fresh baby greens drizzled with special sauce.', '10.95', 'Signature Dishes'),
(17, 'Spicy Tuna Hand Roll', NULL, '3.75', 'Signature Dishes'),
(18, 'Eel Hand Roll', NULL, '3.75', 'Signature Dishes'),
(19, 'Spicy Scallop Hand Roll', NULL, '3.95', 'Signature Dishes'),
(20, 'Philly Hand Roll', NULL, '3.75', 'Signature Dishes'),
(22, 'Salmon (sake)', NULL, '4.25', 'Nigiri'),
(23, 'Tuna (maguro)', NULL, '4.95', 'Nigiri'),
(24, 'Yellow Tail (hamachi)', NULL, '4.95', 'Nigiri'),
(25, 'BBQ Eel (unagi)', NULL, '4.95', 'Nigiri'),
(26, 'Red Snapper (tai)', NULL, '4.25', 'Nigiri'),
(27, 'White Tuna (Shiro maguro)', NULL, '4.25', 'Nigiri'),
(28, 'Shrimp (ebi)', NULL, '3.95', 'Nigiri'),
(29, 'Octopus (tako)', NULL, '4.25', 'Nigiri'),
(30, 'Smoked Salmon', NULL, '4.25', 'Nigiri'),
(31, 'Masago (smelt egg)', NULL, '4.25', 'Nigiri'),
(32, 'Eastern Hand Roll Combo', 'A combination of a california hand roll, eel hand roll, and a philly hand roll.', '10.95', 'Signature Dishes'),
(33, 'Western Hand Roll', 'Combination of spicy tuna hand roll, spicy scallop roll, and spicy salmon hand roll.', '10.95', 'Signature Dishes'),
(34, 'Crab Stick (kahi)', NULL, '3.45', 'Nigiri'),
(35, 'Tamago', NULL, '4.55', 'Nigiri'),
(36, 'Squid (ika)', NULL, '4.95', 'Nigiri'),
(37, 'Mackerel (saba)', NULL, '4.95', 'Nigiri'),
(38, 'Surf Clam (hokkigai)', NULL, '4.25', 'Nigiri'),
(39, 'Scallop (hotate-gai)', NULL, '4.25', 'Nigiri'),
(40, 'Sweet Shrimp (amaebi)', NULL, '4.95', 'Nigiri'),
(41, 'Tobiko (flying fish egg)', NULL, '4.95', 'Nigiri'),
(42, 'Spicy Tuna', NULL, '4.25', 'Nigiri'),
(43, 'Snow Crab (kani)', NULL, '4.25', 'Nigiri'),
(44, 'Salmon (6 pcs)', NULL, '8.95', 'Sashimi'),
(45, 'Tuna (6 pcs)', NULL, '9.95', 'Sashimi'),
(46, 'Yellow Tail (6 pcs)', NULL, '9.95', 'Sashimi'),
(47, 'Sashimi for two', '27 pieces of chef''s choice variety.', '33.95', 'Sashimi'),
(49, 'White Tuna (6 pcs)', NULL, '8.95', 'Sashimi'),
(50, 'Red Snapper (14 pcs)', 'Thinly sliced served with ponzu sauce.', '10.95', 'Sashimi'),
(51, 'Sashimi Combo', '15 pcs of chef''s choice variety', '20.95', 'Sashimi'),
(52, 'California Roll', 'Crab, cucumber, avocado inside with masago on the outside', '4.95', 'Sushi Rolls'),
(53, 'California Salad Roll', 'Crab salad, Japanese mayo, cucumber, and avocado inside.', '4.95', 'Sushi Rolls'),
(54, 'Eel Roll', 'BBQ eel, avocado, and cucumber inside', '5.45', 'Sushi Rolls'),
(55, 'Shrimp Tempura Roll', 'Tempura shrimp, scallions, and Japanese mayo inside drizzled with eel sauce on top.', '5.95', 'Sushi Rolls'),
(56, 'Spicy Tuna Roll', 'Minced sweet and spicy tuna mix with crunch inside.', '5.25', 'Sushi Rolls'),
(57, 'Crunchy Shrimp Roll', 'Steamed shrimp, avocado, and tempura crunch inside.', '5.25', 'Sushi Rolls'),
(58, 'Spider Roll (5 pcs)', 'Deep fried softshell crab, mayo, avocado, and cucumber inside', '6.25', 'Sushi Rolls'),
(59, 'Tiger Eyes Roll', 'Tuna, cream cheese, avocado, and crab inside.', '5.95', 'Sushi Rolls'),
(60, 'Alaska Roll', 'Fresh salmon, crab, and avocado inside.', '5.25', 'Sushi Rolls'),
(61, 'Philly Roll', 'Smoked salmon, cream cheese, and avocado inside.', '5.25', 'Sushi Rolls'),
(62, 'Starg Gril', 'Crawfish avocado tamago crunchy on the top.', '5.25', 'Sushi Rolls'),
(63, 'Spicy Scallop Roll', 'Spicy diced sweet raw scallop and smelt egg inside.', '5.75', 'Sushi Rolls'),
(64, 'King Cobra Roll', 'Shrimp tempura, cucumber, and cream cheese inside topped with spicy crab salad and avocado.', '9.95', 'Sushi Rolls'),
(65, 'Tempura Kamikaze Roll', 'Cream cheese, avocado, crab inside and completely deep fried coated in tempura batter.', '6.95', 'Sushi Rolls'),
(66, 'Tuna Roll', NULL, '3.95', 'Small Rolls'),
(67, 'Salmon Roll', NULL, '3.75', 'Small Rolls'),
(68, 'Yellow Tail Roll', NULL, '3.75', 'Small Rolls'),
(69, 'Crab Roll', NULL, '3.25', 'Small Rolls'),
(70, 'Cucumber Roll', NULL, '2.95', 'Small Rolls'),
(71, 'Shrimp Roll', NULL, '3.55', 'Small Rolls'),
(72, 'Rainbow Roll', 'Avocado, crab, cucumber inside topped with assorted fish.', '8.95', 'Chef Special Rolls'),
(73, 'Ichi Roll', 'Authentic claw crab meat inside topped with jumbo steamed shrimp.', '8.25', 'Chef Special Rolls'),
(74, 'Bama Crunch Roll', 'Tempura crunch and mayo inside with smoked salmon on top.', '7.25', 'Chef Special Rolls'),
(75, 'Dancing Eel Roll', 'California roll topped with BBQ eel drizzled in eel sauce.', '8.95', 'Chef Special Rolls'),
(76, 'Candy Cane Roll', 'Spicy tuna roll topped with tuna and white tuna.', '8.95', 'Chef Special Rolls'),
(77, 'Auburn Tiger Roll', 'Crab, crunch, and spicy mayo inside topped with jumbo shrimp.', '7.25', 'Chef Special Rolls'),
(78, 'Dragon Roll', 'Crab and cucumber inside topped with with thinly sliced avocado.', '8.95', 'Chef Special Rolls'),
(79, 'Roll Tide Roll', 'Fried salmon and cream cheese inside topped with tuna, salmon, and a line of sriracha.', '8.95', 'Chef Special Rolls'),
(80, 'Snow White Roll (6 pcs)', 'Crab salad, fried with fish, avocado, cream cheese inside wrapped with white soy paper.', '6.25', 'Chef Special Rolls'),
(81, 'Pink Lady Roll (6 pcs)', 'Tuna, crab salad, tobiko, avocado inside wrapped with pink soy pepper.', '6.25', 'Chef Special Rolls'),
(82, 'Volcano Roll', 'Baked crab salad mixed in spicy mayo on top of a california roll with masago.', '7.95', 'Chef Special Rolls'),
(83, 'Fuji Roll', 'California roll topped with assorted diced fish mixed in a sweet and spicy sauce.', '7.95', 'Chef Special Rolls'),
(84, 'Crazy Scallop Roll', 'Torched scallops on top of a California roll.', '8.25', 'Chef Special Rolls'),
(85, 'Special Crystal Roll', 'Salmon, crab, avocado, cream cheese, and tobiko wrapped with cucumber.', '8.95', 'Chef Special Rolls'),
(86, 'Summer Roll', 'Shrimp, crab, baby green inside wrapped with rice paper, served with sesame sauce.', '7.45', 'Chef Special Rolls'),
(87, 'Crazy Roll (6 pcs)', 'Cream cheese, shrimp, eel, avocado all deep fried into a roll.', '6.95', 'Chef Special Rolls'),
(88, 'Shaggy Dog Roll', 'Shrimp tempura roll topped with crab meat drizzled with a chef special sauce.', '8.25', 'Chef Special Rolls'),
(89, 'Ninja Roll', 'Tempura Crunch and spicy mayo inside topped with BBQ eel and crab.', '7.95', 'Chef Special Rolls'),
(90, 'Beauty and Beast Roll', 'Cream cheese and crab inside topped with half crab salad and half spicy tuna.', '7.95', 'Chef Special Rolls'),
(91, 'Longhorn Roll', 'Stuffed spicy tuna jalapeno pepper with cream cheese topped in crab salad, crunch, masago, and drizzled lightly in spicy mayo.', '9.95', 'Chef Special Rolls'),
(92, 'Caterpillar Roll', 'BBQ eel inside topped with thinly sliced avocado, sprinkled with masago, and eel sauce.', '8.95', 'Chef Special Rolls'),
(93, 'Sakura Roll', 'Crawfish, avocado, spicy mayo inside topped with a mixture of crab salad and spicy tuna.', '9.95', 'Chef Special Rolls'),
(94, 'Mermaid Roll', 'Tempura shrimp inside topped with BBQ eel sprinkled with a variety of roe.', '9.95', 'Chef Special Rolls'),
(95, 'Hawaii Roll', 'Spicy tuna and crunch inside topped with thinly sliced mango.', '7.95', 'Chef Special Rolls'),
(96, 'Tokyo Roll ', 'Fried salmon, eel, and mayo inside topped with white tuna, jalapeno and sriracha.', '9.95', 'Chef Special Rolls'),
(97, 'Heisman Roll', 'Shrimp tempura roll inside topped with a baked spicy crab salad, cream cheese, and mango.', '10.95', 'Chef Special Rolls'),
(98, 'Warm Winter Roll', 'Crab meat and cucumber inside topped with sliced avocado and spicy tuna with special sauce.', '8.95', 'Chef Special Rolls'),
(99, 'Tataki Roll', 'Crawfish, cucumber, and crunch inside topped with beef tataki and special sauce.', '10.95', 'Chef Special Rolls'),
(100, 'Tiger Tail Roll', 'Tempura shrimp and crab salad inside topped with eel and steamed shrimp drizzled with special sauce.', '9.95', 'Chef Special Rolls'),
(101, 'Rock ''N Roll', 'Tempura shrimp, crab salad and spicy tuna inside topped with searing salmon, avocado, masago, and crunch.', '10.95', 'Chef Special Rolls'),
(102, 'Louisiana Roll', 'Crab salad, fried smoked salmon, fish eggs with cream cheese wrapped in soy pepper, served with eel sauce and shrimp sauce on the side.', '8.95', 'Chef Special Rolls'),
(103, 'Boston Roll', 'Tempura shrimp, spicy mayo, crab, lettuce inside wrapped in seaweed.', '6.96', 'Chef Special Rolls'),
(104, 'Green Tea Ice Cream', NULL, '3.25', 'Sweet Treats'),
(105, 'Red Bean Ice Cream', NULL, '3.25', 'Sweet Treats'),
(106, 'Sushi Combo', '7 pieces of nigiri and a California roll', '15.95', 'Sushi Combo'),
(107, 'Roll Combo', 'Includes a California roll, one tuna roll, and one cucumber roll.', '9.95', 'Sushi Combo'),
(108, 'Tuna Dinner Combo', '6 pieces of chef choice nigiri and a tuna roll.', '11.95', 'Sushi Combo'),
(109, 'Sushi and Sashimi Combo', 'One California roll, 9 pieces of assorted sashimi, and 5 pieces of assorted nigiri.', '19.95', 'Sushi Combo'),
(110, 'Chirashi', 'Assorted sashimi over a bed on sushi rice.', '15.95', 'Sushi Combo'),
(111, 'Love Boat (for 2 people)', 'Includes a side of teriyaki steak and chicken, on California roll, 2 gyoza, and 2 pieces of tempura shrimp and tempura vegetables.', '29.95', 'Sushi Combo'),
(112, 'Dream Boat (for 2 people)', '9 pieces of assorted sashimi, 10 pieces of variety nigiri, one California roll, and a Snow White roll.', '39.95', 'Sushi Combo'),
(113, 'Japanese Fried Rice', NULL, '2.35', 'Side Dishes'),
(114, 'Miso Soup', NULL, '1.55', 'Side Dishes'),
(115, 'House Ginger Salad', NULL, '2.25', 'Side Dishes'),
(116, 'Teriyaki Shrimp', NULL, '5.25', 'Side Dishes'),
(117, 'Teriyaki Chicken', NULL, '4.25', 'Side Dishes'),
(118, 'Teriyaki Steak', NULL, '5.25', 'Side Dishes'),
(119, 'Side Veggies', NULL, '3.75', 'Side Dishes'),
(120, 'Steamed Rice', NULL, '1.00', 'Side Dishes'),
(121, 'Chicken Teriyaki', 'Grilled chicken with teriyaki sauce. Comes with grilled vegetables and dumpling egg roll.', '8.95', 'Dinner Entrees'),
(122, 'Steak Teriyaki', 'Grilled steak with teriyaki sauce. Comes with grilled vegetables and dumpling egg roll.', '11.95', 'Dinner Entrees'),
(123, 'Shrimp Teriyaki', 'Grlled shrimp with teriyaki sauce. Comes with grilled vegetables and dumpling egg roll.', '9.95', 'Dinner Entrees'),
(124, 'Salmon Teriyaki', 'Grlled salmon with teriyaki sauce. Comes with grilled vegetables and dumpling egg roll.', '10.95', 'Dinner Entrees'),
(125, 'Teriyaki Chicken and Tempura Shrimp/Veggie Combo', NULL, '11.95', 'Teriyaki and Tempura Combinations'),
(126, 'Teriyaki Salmon or Shrimp and Tempura Shrimp/Veggie Combo', NULL, '13.95', 'Teriyaki and Tempura Combinations'),
(127, 'Teriyaki Steak and Tempura Shrimp/Veggie Combo', NULL, '12.95', 'Teriyaki and Tempura Combinations'),
(128, 'Samurai Chicken and Tempura Shrimp/Veggie Combo', NULL, '12.95', 'Teriyaki and Tempura Combinations'),
(129, 'Katsu (your choice of pork or chicken)', 'Breaded pork or chicken, stir fried veggies, and an egg served over a bed of rice.', '10.25', 'Katsu and Donburi Entrees'),
(130, 'Yakisoba (your choice of chicken, beef, or pork)', 'Stir fried Japanese noodles with vegetables with selected meat.', '9.95', 'Katsu and Donburi Entrees'),
(131, 'Tempura Udon', 'Tempura shrimp, egg, fish cake, and vegetable served in broth with udon.', '8.95', 'Katsu and Donburi Entrees'),
(132, 'Seafood Udon', 'Sushi chef choice seafood and vegetables served in broth with udon.', '10.95', 'Katsu and Donburi Entrees'),
(133, 'Chicken Fried Rice', NULL, '7.25', 'Rice Dishes'),
(134, 'Beef Fried Rice', NULL, '8.25', 'Rice Dishes'),
(135, 'Vegetable Fried Rice', NULL, '7.25', 'Rice Dishes'),
(136, 'Shrimp Fried Rice', NULL, '9.25', 'Rice Dishes'),
(137, 'Combo (Chicken, Beef, and Shrimp) Fried Rice', NULL, '10.95', 'Rice Dishes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=138;
