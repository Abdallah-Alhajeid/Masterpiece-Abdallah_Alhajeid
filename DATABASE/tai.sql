-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 10:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `email`, `password`, `admin_image`, `created_at`, `updated_at`) VALUES
(1, 'Abdallah', 'abdallah@mail.com', '$2y$10$osjRh8Drk9abqX3ppudJae/byubKua7gjYwuNms.yBFqrjFnxZM96', '1614499012.jpg', '2021-02-28 05:56:52', '2021-04-19 22:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `article_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_body`, `article_image`, `created_at`, `updated_at`) VALUES
(4, 'The Problem of Food Waste', '<h2>&nbsp;</h2>\r\n\r\n<p>There are two main kinds of wasted food: food loss and food waste. Food loss is the bigger category, and incorporates any edible food that goes uneaten at any stage. In addition to food that&rsquo;s uneaten in homes and stores, this includes crops left in the field, food that spoils in transportation, and all other food that doesn&rsquo;t make it to a store. Some amount of food is lost at nearly every stage of food production.<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-6-1309\">6</a>&nbsp;Food waste is a specific piece of food loss,&nbsp;which the US Department of Agriculture&rsquo;s (USDA) Economic Research Service (ERS), defines as food discarded by retailers due to color or appearance and plate waste by consumers.&rdquo;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-7-1309\">7</a>&nbsp;Food waste includes the half-eaten meal left on the plate at a restaurant, food scraps from preparing a meal at home and the sour milk a family pours down the drain.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-8-1309\">8</a><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h2>Where Is Food Lost?</h2>\r\n\r\n<p>Edible food is discarded at every point along the food chain: on farms and fishing boats, during processing and distribution, in retail stores, in restaurants and at home.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-9-1309\">9</a><br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h3>Food Loss on Farms</h3>\r\n\r\n<p>Food production in the US uses 15.7 percent of the total energy budget, 50 percent of all land and 80 percent of all freshwater consumed.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-10-1309\">10</a><a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-11-1309\">11</a><a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-12-1309\">12</a>&nbsp;Yet 20 billion pounds of produce is lost on farms every year.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-13-1309\">13</a>&nbsp;Food loss occurs on farms for a variety of reasons. To hedge against pests and weather, farmers often plant more than consumers demand. Food may not be harvested because of damage by weather, pests and disease.&nbsp;Market conditions off the farm can lead farmers to throw out edible food. If&nbsp;the price of produce on the market is lower than the cost of transportation and labor, sometimes farmers will leave their crops un-harvested.&nbsp;This practice, called dumping, happens when farmers are&nbsp;producing&nbsp;more of a product that people are willing to buy, or when demand for a product falls unexpectedly. During the COVID-19 pandemic, for example, farmers lost a major portion of their business due to restaurant and school lunchroom closures. This led them to the painful decision to plow over edible crops and dump up to 3.7 million gallons of milk per day onto fields rather than go through the additional cost of harvesting and processing products they could not sell.<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-14-1309\">14</a>&nbsp;While the government has programs to&nbsp;<a href=\"https://foodprint.org/blog/nutrition-assistance-programs/\">buy excess produce and donate it&nbsp;</a>to food shelves and emergency relief organizations, the highly specialized processing and transportation networks for many products makes donation difficult and expensive.<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-15-1309\">15</a>&nbsp;Cosmetic imperfections (leading to so-called &ldquo;ugly produce&rdquo;) are another significant source of food waste on farms both before and after harvest,&nbsp;as consumers are less interested in misshaped or blemished items.&nbsp;Food safety scares and improper refrigeration and handling&nbsp;can also force farmers to throw out otherwise edible food.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-16-1309\">16</a>&nbsp;Finally, in recent years, farmers have been forced to leave food in the fields due to labor shortages caused by changing immigration laws.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-17-1309\">17</a></p>\r\n\r\n<h3>Food Loss on Fishing Boats<br />\r\n<br />\r\n&nbsp;</h3>\r\n\r\n<p>A recent study by the Food and Agriculture Organization of the United Nations (FAO) estimates that eight percent of the fish caught in the world&rsquo;s marine fisheries is discarded &mdash; about 78.3 million tons per year.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-18-1309\">18</a>&nbsp;Discards are the portion of the catch of fish that are not retained and are often returned dead or dying back into the water.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-19-1309\">19</a>&nbsp;Other studies estimate that 40 to 60 percent of the fish caught by European trawlers in the North Sea are discarded at sea.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-20-1309\">20</a><a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-21-1309\">21</a>&nbsp;And a recent US study found that 16 to 32 percent of bycatch are thrown away by American commercial fishing boats.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-22-1309\">22</a>&nbsp;Tropical shrimp trawling has the highest discard rate and accounts for over 27 percent of total estimated discards.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-23-1309\">23</a>&nbsp;Discarding throws the ocean&rsquo;s ecosystem off balance by increasing food for scavengers and killing large numbers of target and non-target fish species.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-24-1309\">24</a></p>\r\n\r\n<h3>Food Loss in Produce Packing Houses</h3>\r\n\r\n<p>Some produce that does not meet strict retailer or consumer cosmetic standards goes to suppliers for processing, but even if they are willing to accept the produce, the supplier must be close enough to justify transportation costs and able to accept large volumes of produce. These cost barriers make it particularly challenging for small and midsize farmers to get these secondary items to processors.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-25-1309\">25</a><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h3>Food Loss in Transportation and Distribution Networks</h3>\r\n\r\n<p>During food transportation and distribution, perishable foods are vulnerable to loss, especially in developing nations where access to adequate and reliable refrigeration, infrastructure and transportation can be a challenge. While this is not a significant source of food waste in the US; food waste does occur when produce spoils from improper refrigeration.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-30-1309\">30</a>&nbsp;A larger problem occurring at this stage is the rejection of perishable food shipments, which are thrown out if another buyer can&rsquo;t be found quickly. It is estimated that between two and five percent of food shipments are rejected by food buyers.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-31-1309\">31</a>&nbsp;Even if these goods make it to market, they are often wasted anyway because of shorter shelf lives. Often, rejected food shipments are donated to food rescue organizations, but the quantities are too large to accept.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-32-1309\">32</a></p>\r\n\r\n<h2>Where is Food Wasted?</h2>\r\n\r\n<h3>Food Waste in Retail Businesses</h3>\r\n\r\n<p>An estimated 43 billion pounds of food were wasted in US retail stores in 2010.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-33-1309\">33</a>&nbsp;This is particularly disconcerting given that in 2016, 12.3 percent of American households were food insecure.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-34-1309\">34</a>&nbsp;Most of the loss in retail operations is in perishables, including baked goods, produce, meat, seafood and prepared meals.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-35-1309\">35</a>&nbsp;The USDA estimates that supermarkets lose $15 billion annually in unsold fruit and vegetables alone.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-36-1309\">36</a>&nbsp;Unfortunately, wasteful practices in the retail industry are often viewed as good business strategies. Some of the main drivers for food loss at retail stores include: overstocked product displays, expectation of cosmetic perfection of fruits, vegetables and other foods, oversized packages, the availability of prepared food until closing, expired &ldquo;sell by&rdquo; dates, damaged goods, outdated seasonal items, over purchasing of unpopular foods and under staffing.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-37-1309\">37</a></p>\r\n\r\n<p>Currently, only 10 percent of edible wasted food is recovered each year, in the US.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-38-1309\">38</a>&nbsp;Barriers to recovering food are liability concerns, distribution and storage logistics and funds needed for gleaning, collecting, packaging and distribution. The&nbsp;<a href=\"http://www.feedingamerica.org/about-us/partners/become-a-product-partner/protecting-our-food-partners.html\" target=\"_blank\">Good Samaritan Food Donation Act</a>, signed into law in 1996, provides legal liability protection for food donors and recipients and tax benefits for participating businesses. However, awareness about this law and trust in the protections it offers remains low.&nbsp;<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/#easy-footnote-bottom-39-1309\">39</a><br />\r\n<br />\r\n<a href=\"https://foodprint.org/issues/the-problem-of-food-waste/\">article link</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n<style type=\"text/css\">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}\r\n</style>', '1618881102.jpg', '2021-04-20 01:09:35', '2021-04-20 08:54:48'),
(5, 'PREVENTING FOOD WASTE', '<p>The cafeteria at Seaton Elementary School in Washington, DC, has linoleum floors, cinderblock walls, and, because it doubles as the school auditorium, a stage with a well-worn red velvet curtain. But what looks ordinary and, at least today, a little chaotic, is actually a pioneering laboratory set up to tackle food waste. Along one side of the room is a line of color-coded bins: black for landfill, yellow for compost, blue for recycling, and white for milk and other liquids. At the end of the lunch period, students separate their trash into the appropriate bins, each of which is weighed and recorded. There&rsquo;s also a cart on wheels that serves as a &ldquo;share table,&rdquo; a place where students can leave uneaten or unopened food for peers who may want or need it.<br />\r\n<br />\r\nThis idea&mdash;that kids who are hungry might be able to grab an extra carton of milk or take food home&mdash;motivates Seaton&rsquo;s &ldquo;wellness ambassadors,&rdquo; a group of fourth- and fifth-graders investigating food waste at school. At Seaton, all the students receive free lunches, and many know what it means to go hungry. &ldquo;My grandma and I sometimes put food in a cooler to give out to the homeless,&rdquo; says Robert Saunders Jr., a fourth-grade wellness ambassador. &ldquo;Someone should eat it if it&rsquo;s going to go in the trash.&rdquo;<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>The lunchroom weighing and recording began last fall when the school&rsquo;s wellness coordinator, Bonnie Gallion, learned about WWF&rsquo;s food waste program for schools. &ldquo;It&rsquo;s sad to see all this food going in the trash. But we didn&rsquo;t know where to start,&rdquo; she says.</p>\r\n\r\n<p>With WWF&rsquo;s help, Seaton conducted its first food waste audit in November 2017. For the second round, on an unseasonably warm day in February, several wellness ambassadors patrol the cafeteria, offering stickers to students who finish their lunches; others help their peers figure out what to throw where&mdash;empty plastic fruit cups go to recycling, but their aluminum lids end up in the trash. Untouched portions of cinnamon-sweetened carrots go into the compost bin.</p>\r\n\r\n<p>The decline in food waste at Seaton is astonishing. Landfill waste plummeted 47%, from about 155 pounds in November to 82 pounds in February. Wasted milk fell 27%, from 52 pounds to 37 pounds. &ldquo;We&rsquo;re thrilled to see such a significant decrease,&rdquo; Gallion says, though she wonders if giving out stickers made the difference or whether the food that day simply weighed less. (It&rsquo;s also possible that students prefer spaghetti and meatballs or burgers to the hot ham and cheese sandwiches served in November.) Regardless, she adds that &ldquo;it is encouraging to think about the difference small changes make.&rdquo; The school&rsquo;s next steps are to restart composting, create a permanent share table, and periodically offer incentives like stickers to encourage kids to eat up.</p>\r\n\r\n<p>Fast. Dramatic. Minimal investment. It&rsquo;s hard to argue with these kinds of results. But why is WWF working to slash food waste in schools? If it seems an odd fit, think again.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Each year, the US federal government serves 30 million children 5 billion meals, and a lot of it goes in the trash. In fact, one-third of the world&rsquo;s food&mdash;1.3 billion tons&mdash;is lost or wasted at a cost of $750 billion annually. When we throw away food, we waste the wealth of resources and labor that was used to get it to our plates. In effect, lost and wasted food is behind more than a quarter of all deforestation and nearly a quarter of global water consumption. It generates as much as 10% of all greenhouse-gas emissions.</p>\r\n\r\n<p>Another negative aspect of food waste is its connection to species loss. Consider this: Food production is the primary threat to biodiversity worldwide, expected to drive an astonishing 70% of projected terrestrial biodiversity loss by 2050. That loss is happening in the Amazon, where rain forests are still being cleared to create new pasture for cattle grazing, as well as in sub-Saharan Africa, where agriculture is expanding rapidly. But it&rsquo;s also happening close to home.</p>\r\n\r\n<p>Take, for example, America&rsquo;s breadbasket: A WWF report estimates that across the North American Great Plains about 2.5 million acres of native grasslands were lost to crop production from 2015 to 2016. Such losses have put grassland birds in perilous decline: Six songbird species, found only in the Great Plains, have seen declines of between 65% and 94% since the 1960s. Yet a percentage of the crops grown eventually ends up in landfills.</p>\r\n\r\n<p>&ldquo;You have a situation on this planet where we are losing habitats and species because we need to grow more food for humans,&rdquo; says Pete Pearson, the director of WWF&rsquo;s food waste program. &ldquo;And then you look at the food waste statistics and you think, wait...what? We don&rsquo;t need to take more habitat away from wildlife to grow more food; we need to waste less of what we already produce. We are squandering everything in the name of convenience, abundance, and cosmetic perfection, and no one understands that connection. Food waste is a conservation issue.&rdquo;</p>\r\n\r\n<p>The statistics are especially staggering in the United States. Americans throw away 40% of their food&mdash;upward of 400 pounds per person per year. This, while 42 million Americans report that they don&rsquo;t have enough to eat.</p>\r\n\r\n<p>What these sweeping figures do not tell us, however, is how to solve the problem. The US government has set an ambitious goal to halve food waste by 2030. To that end, WWF is partnering with industries and institutions that have the potential to make the biggest gains: public schools, hotels, retail grocers, and agricultural producers. In every case, success rests on gathering more granular, actionable data. Doing so is at the heart of every one of WWF&rsquo;s food waste initiatives.</p>\r\n\r\n<p><a href=\"https://www.worldwildlife.org/magazine/issues/fall-2018/articles/the-no-waste-chef\"><img alt=\"Feature waste chef lyr1 fall2018\" src=\"https://c402277.ssl.cf1.rackcdn.com/photos/15866/images/magazine_small/feature_waste_chef_lyr1_fall2018.jpg?1532009841\" /></a></p>\r\n\r\n<p>The ultimate goal, of course, is to prevent food waste and loss in the first place, so much of the work must be done on the farm. In 2017, WWF worked with researchers at Santa Clara University, the University of California-Davis, and the Global Cold Chain Alliance (which focuses on retaining food quality and safety throughout supply chains) to measure on-farm losses of four specialty crops: potatoes, tomatoes, leafy greens, and peaches. The crops were chosen because each has a significant footprint on the landscape and each is grown differently and suffers different types of loss.<br />\r\n<br />\r\nThe studies showed that growing potatoes for processing is very efficient. Contract growers know what people want (yes, the answer is french fries) and how much. Potatoes are also pretty hardy&mdash;easy to transport and store. The WWF study showed an average loss rate of only 2.5%. But the numbers climb fast when looking at fruits and vegetables for the fresh market. Tomato growers in Florida saw losses of around 40%; Arizona leafy green growers lost 56%. In New Jersey, growers of peaches lost nearly 5,000 pounds of peaches per acre, as much as 37% of the crop. More still was lost in the packing houses, where another 108,000 pounds of peaches, or 14%, was tossed each day.<br />\r\n<br />\r\n&ldquo;There is loss at so many levels,&rdquo; says Pearson. &ldquo;Quantifying that loss across different crops and different parts of the industry lays the groundwork for rethinking how we do things&mdash;from the ground up.&rdquo;<br />\r\n<br />\r\nIn March 2018, WWF gathered academics, government officials, farmers, and tech experts to start a conversation. With the data in hand, it was possible to bypass the usual handwringing and dig into actual solutions. These included new ways to structure farm contracts, using technology to more fairly divide costs along the supply chain, and creating new supply chains to connect growers to alternative markets that can utilize more of what they grow.<br />\r\n<br />\r\n&ldquo;Until you measure something, it&rsquo;s not real,&rdquo; says Pearson. &ldquo;I&rsquo;m hopeful that food systems will look dramatically different in 10 years because we&rsquo;re going to start designing them with zero tolerance for loss and waste.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Businesses have a critical role to play in advancing a more sustainable food system that is both good for the world and for the people it serves. The results from our partnership with WWF demonstrate the importance of implementing simple, measurable, and scalable changes to further our goal of making nutritious food available for all&mdash;without breaking the back of the planet.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p><img src=\"https://c402277.ssl.cf1.rackcdn.com/photos/15867/images/cropped/feature_waste_chef_lyr2_fall2018.png?1532009856\" /></p>\r\n\r\n<h3>THE NO-WASTE CHEF</h3>\r\n\r\n<p>Through 35 years working in hotels and restaurants across the US, Chef Lawrence (Larry) Eells has pursued a passion for fine dining focused on fresh, seasonal ingredients.</p>\r\n\r\n<p><a href=\"https://www.worldwildlife.org/magazine/issues/fall-2018/articles/the-no-waste-chef\">READ MORE<em>h</em></a></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Take hotels. The US hospitality industry produces an estimated 2-4 million tons of food waste each year. This is driven in part by many hotels&rsquo; policies to overproduce food for banquets and buffets to create a sense of abundance.</p>\r\n\r\n<p>To rethink such policies, WWF partnered with the American Hotel &amp; Lodging Association (AHLA), which counts brands such as Hilton, Hyatt, IHG, and Marriott among its members. With support from The Rockefeller Foundation, WWF and AHLA set up demonstration projects in member hotels to separate and measure food waste and assess the behaviors, perceptions, and costs associated with it.</p>\r\n\r\n<p>For the Fairmont Hotel in Washington, DC, the pilot program was a no-brainer, says Phelton Calhoun, the hotel&rsquo;s executive steward. It was low-tech and relatively inexpensive, requiring only some new garbage cans&mdash;one set to dispose of and weigh &ldquo;pre-production&rdquo; food, such as fruit and vegetable peels, and another for food to be composted. The goal was to create a system first to prevent food waste, second to donate what could be used elsewhere, and, as a last resort, to divert the rest from landfills. &ldquo;It wasn&rsquo;t more work, just different,&rdquo; says Calhoun, who rolled out the project on Earth Day 2017 to help workers make the connection between the process and its impacts.</p>\r\n\r\n<p>The results were immediate and impressive. In the gallons and gallons of trash, staff were able to visualize the impacts of serving that extra tray of sliced beef or strawberries at a buffet. As important, they could see which foods were left over. So instead of producing an extra 5% of everything, they might make, say, extra shrimp, but not chicken. Over the course of the project, Calhoun saw a 50% reduction in food waste per guest. He also saved money by reducing weekly garbage pickups by as much as 40%.</p>\r\n\r\n<p>Results were consistent throughout the program. Participating hotels saw, on average, reductions in food waste of at least 10%. Some properties reported saving 3% or better in food costs.</p>\r\n\r\n<p>Based on the findings, WWF and AHLA released a&nbsp;<a href=\"http://hotelkitchen.org/\" target=\"_blank\">toolkit for hotels</a>, challenging the industry to create systems&mdash;and a culture&mdash;to address food waste. It outlines opportunities to engage and empower everyone from the dishwasher to the head chef. In April, WWF held the first of several meetings, in Singapore, to bring together hoteliers, associations, government officials, and NGOs to discuss opportunities to fight food waste in the hospitality sector globally.</p>\r\n\r\n<p>Grocery retailers represent another huge opportunity to reduce waste. Retailers that once viewed overripe pears or meat near its sell-by date as sunk costs of doing business now increasingly see food waste, which totals $18.2 billion annually across the industry, as something that can be controlled. Donating what would otherwise be wasted is also a smart way to fight hunger. According to nonprofit ReFED, retailers can provide nearly 1.2 billion meals to those in need by increasing their donations to food pantries.<br />\r\n<br />\r\nTo that end, in September 2017, Kroger&mdash;the nation&rsquo;s second-largest grocery retailer, with 2,800 stores&mdash;introduced its Zero Hunger | Zero Waste plan to end hunger and eliminate waste in its communities, working with national partners WWF and Feeding America. Again, measuring was the first step. Over the first six months, Kroger<br />\r\nworked with WWF to understand how food waste was being managed in its stores.<br />\r\n<a href=\"https://www.worldwildlife.org/magazine/issues/fall-2018/articles/preventing-food-waste\">article link</a></p>\r\n<style type=\"text/css\">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}\r\n</style>', '1618881248.jpg', '2021-04-20 01:14:08', '2021-04-20 01:15:20'),
(6, 'People waste more food than they think psychology', '<p>In the psychology of food waste, people are often misled by their surroundings. But we can rethink our choices.</p>\r\n\r\n<p>Food waste, that scourge that sends&nbsp;<a href=\"https://www.usda.gov/foodlossandwaste\">more than a third</a>&nbsp;of our food supply to rot and is a major contributor to&nbsp;<a href=\"https://www.unenvironment.org/regions/north-america/regional-initiatives/minimizing-food-waste\">climate change</a>, seems like it should be easy to address.</p>\r\n\r\n<p>Waste less food, advocates cry, and you can save money! You can save time! You can save farmland and fuel, and, since agriculture drives habitat loss, you can even help save the tiger.</p>\r\n\r\n<p>And yet, here we are in the thick of Earth Month, on a day designated as &ldquo;<a href=\"https://www.stopfoodwasteday.com/en/index.html\">Stop Food Waste Day</a>,&rdquo; and you probably don&rsquo;t need to look further than your own kitchen or cafeteria to see edible food dumped. In the U.S. more than&nbsp;<a href=\"https://www.refed.com/downloads/ReFED_Report_2016.pdf\">80 percent of food waste</a>&nbsp;has been traced to homes and consumer-facing businesses.</p>\r\n\r\n<p>So why is this problem so hard to solve? Because, researchers say, we&rsquo;re only human. We have some irrational tendencies, some aspirations that don&rsquo;t match reality, and some major blind spots. Not to mention busy schedules that don&rsquo;t always align with when the avocado on the counter finally ripens. Here in the U.S., food waste is often invisibly baked into how we shop, cook and entertain.</p>\r\n\r\n<p>&ldquo;I do think awareness is slowly growing,&rdquo; said Dana Gunders, author of the&nbsp;<em><a href=\"https://www.amazon.com/dp/B010ERPG20/ref=dp-kindle-redirect?_encoding=UTF8&amp;btkr=1\">Waste-Free Kitchen Handbook</a></em>. &ldquo;But I think there&rsquo;s still a disconnect between being aware that this is a global problem and connecting that to what you&rsquo;re actually doing when you scrape your plate into the garbage.&rdquo;</p>\r\n\r\n<p>Researchers and advocates are hopeful, but here&rsquo;s some of what we&rsquo;re up against:</p>\r\n\r\n<h2><strong>We trust tiny printed numbers more than our own senses</strong></h2>\r\n\r\n<p>Confusion over &ldquo;best by,&rdquo; &ldquo;sell by,&rdquo; &ldquo;use by,&rdquo; and other date labels leads Americans to throw away an estimated&nbsp;<a href=\"https://www.refed.com/solutions/standardized-date-labeling\">$29 billion of safe food every year</a>. Advocates are trying to educate consumers and&nbsp;<a href=\"https://www.refed.com/solutions/standardized-date-labeling\">standardize the labels</a>, which generally aren&rsquo;t regulated and are often based on quality, not safety.<br />\r\n<br />\r\nTo test just how far this blind faith extends, researchers at Ohio State University presented&nbsp;<a href=\"https://www.sciencedirect.com/science/article/abs/pii/S0950329317303142\">study participants</a>&nbsp;with jugs of milk of varying ages&mdash;some with the &ldquo;sell by&rdquo; date; others without any dating.</p>\r\n\r\n<p>People were more likely to deem older milk acceptable when they didn&rsquo;t see a date. Interestingly, one of the &ldquo;younger&rdquo; test milks wasn&rsquo;t top quality, likely due to a processing issue. Many participants who saw its &ldquo;fresh&rdquo; date stamp deemed it perfectly fine; those who didn&rsquo;t see the label were more likely to say it wasn&rsquo;t good to drink.</p>\r\n\r\n<h2><strong>We don&rsquo;t see our own waste</strong></h2>\r\n\r\n<p>While ad campaigns like&nbsp;<a href=\"https://savethefood.com/\">SaveTheFood</a>&nbsp;have made food waste a more prominent issue, cultivating individual self-awareness is hard. A Natural Resources Defense Council study of food waste in several cities found that&nbsp;<a href=\"https://www.nrdc.org/sites/default/files/food-matters-ib.pdf\">76 percent</a>&nbsp;of people think they throw away less food than the average American. Clearly the math doesn&rsquo;t add up.</p>\r\n\r\n<p>&ldquo;It&rsquo;s a pretty universal response to any negative accusation,&rdquo; said&nbsp;<a href=\"https://u.osu.edu/foodwaste/\">Ohio State Food Waste Collaborative</a>&nbsp;director Brian Roe, who&rsquo;s gotten similar results in his own work. &ldquo;Nobody wants to admit or think that they are the problem.&rdquo;</p>\r\n\r\n<h2><strong>We&lsquo;re quick to congratulate ourselves for composting</strong></h2>\r\n\r\n<p>Another&nbsp;<a href=\"https://fic.osu.edu/news/news-archive/brian-roe-suggests-food-waste-worries-vanish-compost.html\">common finding</a>? When composting is available, people make fewer efforts to reduce the amount of food they pitch.</p>\r\n\r\n<p>2:17</p>\r\n\r\n<p>TIL: WE WASTE ONE-THIRD OF FOOD WORLDWIDE</p>\r\n\r\n<p>&ldquo;Perhaps the interpretation is composting lets them off the hook emotionally from feeling bad about wasting food,&rdquo; said Roe, a professor of agricultural, environmental, and developmental economics. &ldquo;Composting is not a bad thing, but you&rsquo;d prefer to not create the food waste in the first place. It&rsquo;s going to have a lot more social and environmental benefits.&rdquo;</p>\r\n\r\n<h2><strong>We have crafty ways to alleviate our guilt over throwing away leftovers</strong></h2>\r\n\r\n<p>When the server asks if you want your brussels sprout salad wrapped, you may say &ldquo;yes&rdquo; out of guilt, and you may even convince yourself that you&rsquo;ll make a point of eating it. But if you don&rsquo;t make it a priority, it will probably spoil. Stink bombs are easier to throw away than edible food.</p>\r\n\r\n<p>Laura Moreno, who studies why people waste food at home at the University of California, Berkeley, calls this &ldquo;delayed disposal.&rdquo;</p>\r\n\r\n<p>&ldquo;There&rsquo;s a guilt alleviation process that happens,&rdquo; said Moreno, a PhD candidate.&nbsp;<a href=\"https://www.nrdc.org/sites/default/files/food-matters-ib.pdf\">NRDC&rsquo;s study of food waste in cities found</a>&nbsp;leftovers to be the second most wasted category of food (behind fruits and vegetables).</p>\r\n\r\n<p>The freezer is another stop food often makes on its way to the trash can, said Gunders, who authored NRDC&rsquo;s&nbsp;<a href=\"https://www.nrdc.org/sites/default/files/wasted-2017-report.pdf\">seminal report on food waste</a>&nbsp;and now consults on the issue. To make sure food gets eaten and save prep time, she suggests eating frozen leftovers soon, as in the following week.<br />\r\n<br />\r\n&ldquo;I like to think of my freezer as short-term storage, not long-term storage,&rdquo; she said.</p>\r\n\r\n<h2><strong>We have our own biases and quirks&mdash;and don&rsquo;t always understand our food</strong></h2>\r\n\r\n<p>Moreno has spent hours peeking into people&rsquo;s fridges and chatting with them about their food habits. Everyone seems to have a different sense of what should go in their mouths and what should go in the bin.</p>\r\n\r\n<p>Some people consider pizza crust &ldquo;inedible.&rdquo; Others only eat the white part of the scallion. One home visit stands out for Moreno: &ldquo;The person very earnestly looked at me and said &lsquo;I always cut off that string thing on the bottom of the carrot because I&rsquo;m not sure if it&rsquo;s safe to eat.&rdquo;</p>\r\n\r\n<p>1:35</p>\r\n\r\n<p>RELATED: FOOD TOO UGLY TO SELL FEEDS THOUSANDS</p>\r\n\r\n<p>Moreno and groups like&nbsp;<a href=\"https://www.refed.com/solutions/consumer-education-campaigns\">ReFED</a>, a food-waste-focused non-profit, rank increasing food literacy as one of the most effective ways to reduce food waste. (It&rsquo;s something I&rsquo;m working on as well. On my website&nbsp;<a href=\"https://www.eatortoss.com/\">EatOrToss.com</a>, I post images and scientific explanations of confusing food situations to help consumers make informed choices before throwing food away.)</p>\r\n\r\n<h2><strong>We turn up our noses at frozen food</strong></h2>\r\n\r\n<p>While most of us probably don&rsquo;t worry about the skinny bit at the end of a carrot, biases against frozen food are pervasive. Freezer staples won&rsquo;t wilt or get moldy and can help add veggies and protein to weeknight meals without constant trips to the store. But groups like NRDC and the World Wildlife Fund are stuck fighting the mushy broccoli stigma.</p>\r\n\r\n<p>&ldquo;You need an advocate in the celebrity chef movement to promote the fact that it&#39;s still healthy and you&#39;re not sacrificing anything,&rdquo; said Monica McBride, food waste manager at WWF. (<a href=\"https://www.nationalgeographic.com/magazine/article/global-food-waste-statistics\" target=\"_blank\">Read about how &quot;ugly&quot; fruits and vegetables can help solve world hunger.</a>)</p>\r\n\r\n<h2><strong>Our waste is tied up in love and good intentions</strong></h2>\r\n\r\n<p>&ldquo;Wasting food is a byproduct of other activities that typically have good intentions around them,&rdquo; noted Gunders. &ldquo;Feeding your family healthy food, trying something new, hosting a good party, eating healthier yourself, cooking more. The waste is a somewhat invisible byproduct of that.&rdquo;</p>\r\n\r\n<p>Food waste solutions, said Moreno, need to acknowledge that asking people to waste less food can also mean asking them to sacrifice the feeling that they&rsquo;re taking good care of their family. For many, a full fridge represents being prepared, which provides a sense of comfort.</p>\r\n\r\n<p>One of Moreno&rsquo;s research subjects, who replaces an item the moment it&rsquo;s used up, and who professed a desire to feel like she was caring for her family and friends, called it &ldquo;shopping for Armageddon.&rdquo;</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Speaking of a full fridge, consider the heaping bread basket at dinner. The loaded chafing pan at the buffet. The tall produce pyramid at the grocery store. We find abundant displays appealing and are suspicious of, say, a solo banana or the last salmon fillet.<br />\r\n<br />\r\nHotels, with their breakfast spreads and many catered events, are notorious wasters, so WWF investigated ways to green up the buffet line without sacrificing elegance. One key&nbsp;<a href=\"https://hotelkitchen.org/toolkit/serving/\">recommendation&nbsp;</a>was to embrace luxury over abundance. So, instead of that overflowing bread basket, hotels might offer a tray of neatly arranged rolls and post a sign noting that they&rsquo;re warm and fresh from the oven. To avoid the sad look of a nearly emptied tray, WWF advises putting out smaller pans of food as the event wears on; they still look full, but offer&mdash;and waste&mdash;less food.</p>\r\n\r\n<h2><strong>We shop aspirationally</strong></h2>\r\n\r\n<p>At the farmers&rsquo; market, it can be easy to envision a week of healthy, Instagram-able meals of colorful salads and herb-sprinkled veggie roasts. But, life often gets in the way. There are restaurant outings. Spontaneous invitations. Late nights at work. Not feeling like cooking. The produce doesn&rsquo;t all last.</p>\r\n\r\n<p>&ldquo;You need to match what you&rsquo;re buying with the cadence of your shopping,&rdquo; said Elizabeth Balkan, NRDC food waste director. &ldquo;If you want to be eating fresh, but you&rsquo;re trying to go the supermarket every two weeks, it&rsquo;s not going to work.&rdquo;</p>\r\n\r\n<p>As the parent of young children, Balkan says she&rsquo;s sensitive to this when giving them new foods. Serve the volume of food you&rsquo;d ideally like your kids to eat and you&rsquo;ll easily end up feeding the floor.</p>\r\n\r\n<h2><strong>Our cookware, appliances, and even groceries can encourage excess</strong></h2>\r\n\r\n<p>Groceries can add to your food waste load when food is packaged in too-big sizes or bags that are hard to seal. At home our fridges are big; our casserole dishes designed for large family meals, and our plates often oversized. Not helpful when we&rsquo;re trying to cut down on food waste.</p>\r\n\r\n<p>&ldquo;One of the great things we can do to trick ourselves is to make sure our plateware is appropriately sized,&rdquo; said Gunders.</p>\r\n\r\n<p>&ldquo;There&rsquo;s also this idea,&rdquo; said Moreno, &ldquo;that there&rsquo;s this magical place called the back of the refrigerator where everything gets lost.&rdquo;</p>\r\n\r\n<p>Short of urging everyone to downsize their fridge, Moreno, who would like to see food waste advocacy collaborate more with other issues, is toying with this idea: what if people were encouraged to stock emergency supplies of water in rows at the back of their fridges? Then more items would be pushed to the front and fewer things would be lost.</p>\r\n\r\n<h2><strong>We&rsquo;re social creatures who don&rsquo;t like to buck norms</strong></h2>\r\n\r\n<p>Let&rsquo;s say you&rsquo;re at a wedding; you&rsquo;ve filled up on passed horderves and the mashed potato bar and now you can&rsquo;t finish your roasted chicken entree.</p>\r\n\r\n<p>Asking for a box feels rude, right? But when we&rsquo;re throwing away close to half our food, squandering resources and contributing to climate change along the way, isn&rsquo;t it more offensive to let the food go to waste?</p>\r\n\r\n<p>Certainly. But the taboo remains, said Gunders. With a little nudge though, it can be overcome. She urges caterers to put out to-go containers and signs saying &ldquo;help yourself.&rdquo;</p>\r\n\r\n<p>&ldquo;I think it&rsquo;s up to the host to break the ice, and when they do, people tend to respond.&rdquo;</p>\r\n\r\n<h2><strong>Be more mindful, but don&rsquo;t beat yourself up</strong></h2>\r\n\r\n<p>When it comes to mitigating climate change,&nbsp;<a href=\"https://www.drawdown.org/\">Project Drawdown</a>&nbsp;ranks reducing food waste as the third most impactful action, behind only better management of refrigerants and increased onshore wind power (for context, electric vehicles rank 26th). And while we can&rsquo;t all install wind turbines on our lunch breaks, we all can make tweaks to our lunches and our lives in general to facilitate less waste.</p>\r\n\r\n<p>So, the silver lining of addressing food waste is that everyone can dial up their self awareness and make a big impact. But Moreno, who points out that we don&rsquo;t need yet another food neurosis, cautions against putting all the onus on the individual consumer. Systemic efforts to do things like improve our food literacy, reimagine our grocery stores and kitchens, reform date labels, and rethink catered events can make it harder for us to mindlessly waste by adjusting our surroundings, and not guilting or shaming us.</p>\r\n\r\n<p>&ldquo;Just because food is wasted in a household doesn&#39;t mean it&rsquo;s caused by that individual person,&rdquo; Moreno said. &ldquo;There are a lot of factors at play.&rdquo;<br />\r\n<br />\r\n<a href=\"https://www.nationalgeographic.com/environment/article/people-waste-more-food-than-they-think-psychology\">article link&nbsp;</a></p>\r\n<style type=\"text/css\">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}\r\n</style>', '1618881498.jpg', '2021-04-20 01:18:18', '2021-04-20 08:54:34');
INSERT INTO `articles` (`article_id`, `article_title`, `article_body`, `article_image`, `created_at`, `updated_at`) VALUES
(7, 'Will fall in food waste in the Middle East outlast the coronavirus pandemic?', '<p>DUBAI, LONDON: COVID-19 has been a disaster for the hospitality sector, shutting restaurants, bars and cafes for months on end, devouring their profits and causing many to close down for good.</p>\r\n\r\n<p>One of the few silver linings of the pandemic cloud, however, is the substantial reduction in food waste and the rise of a more conscientious approach to consumption.</p>\r\n\r\n<p>Across the Middle East and North Africa region, the signs are promising, at least for now. A survey of 284 people in Tunisia conducted by the US-based National Center for Biotechnology Information (NCBI) this year found 85 percent of respondents discarded no household food waste, while a majority said they had devised a strategy for saving, storing and eating leftovers.</p>\r\n\r\n<p>&ldquo;Changes in food waste prevention might be driven more by the socio-economic context of the COVID-19 lockdown, such as food availability, restricted movements or loss of income than by a pro-environmental concern,&rdquo; the NCBI said in its study.</p>\r\n\r\n<p>It is no secret that GCC member states are among the highest waste-generating countries per capita in the world. However, in the UAE, the volume of food waste fell in 2020 once the biggest food wasters like hotels closed up their kitchens. Households also changed their shopping habits, buying only what they needed and saving what they could not finish.</p>\r\n\r\n<p>&ldquo;During the lockdown, many of us have been experiencing self-reliance. We have reassessed the value of our comforts that we usually took for granted,&rdquo; said Ivano Iannelli, chief executive of green economy think tank Dubai Carbon.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.arabnews.com/sites/default/files/userimages/17/food.jpg\" style=\"height:905px; width:1200px\" /></p>\r\n\r\n<ul>\r\n	<li>Reduction in food waste bodes well for a region known for overconsumption and overreliance on imports</li>\r\n	<li>UN agencies estimate around a third of the world&rsquo;s food is being wasted, or roughly 1.43 billion tons every year</li>\r\n</ul>\r\n\r\n<p>Some employers have chosen to cut salaries to help weather the economic storm, which has forced families to reduce their daily consumption by cooking in more and storing their leftovers.</p>\r\n\r\n<p>Food retailers in the GCC region have done rather well out of the pandemic, with many more customers ordering groceries to their door, according to a 2020 report by US sales intelligence firm Altios International Inc.</p>\r\n\r\n<p>Consumers have also started buying more essential items in bulk to avoid regular trips to the store, the data suggests. &ldquo;In the UAE, the snacks category has been steadily growing and is expected to see marked growth as consumers stay indoors during the COVID-19 outbreak,&rdquo; the report said.</p>\r\n\r\n<p>Two UAE residents interviewed by Arab News exemplify the popular embrace of the digital marketplace. May Adel, an e-commerce account executive, said she has completely shifted to online grocery shopping since the pandemic began as she finds it safer and more convenient.</p>\r\n\r\n<p>Zaheda Muntazir, social media marketer, said: &ldquo;I have started to shop online more, especially grocery delivery, as it is easier especially during this critical time.&rdquo;</p>\r\n\r\n<p>Of course, the real world of consumption is more complicated. Preeti Bisht, an organic waste management and compostable food packaging specialist, says many people have reverted to their older shopping habits now that the more stringent lockdown measures have been lifted. Nevertheless, owing to a general climate of financial insecurity, customers appear far more aware of their monthly expenses.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://www.arabnews.com/sites/default/files/userimages/17/000_1i96b2.jpg\" style=\"height:674px; width:1000px\" /></p>\r\n\r\n<p><br />\r\nIn Saudi Arabia, approximately 33 percent of food is wasted. (AFP)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Most people buy weekly groceries, which are well listed before visiting the supermarket to avoid unwanted stuff,&rdquo; she told Arab News.</p>\r\n\r\n<p>Additionally, social-distancing rules have made family gatherings far less common this year, which has helped reduce the associated waste of laying on big spreads at holiday time. &ldquo;It is believed that, during Ramadan, food waste is double the normal level,&rdquo; said Bisht.</p>\r\n\r\n<p>&ldquo;As per conservative estimates, around 15-25 percent of all food items purchased or prepared during Ramadan find its way into the garbage bin before being used or consumed.&rdquo;</p>\r\n\r\n<p>In Saudi Arabia, approximately 33 percent of food is wasted, costing the country $10.6 billion per year, according to a study by the Saudi Grains Organization.</p>\r\n\r\n<p>&ldquo;To my knowledge, the Kingdom has the maximum food waste in the Middle East region. They generate an average of 427kg of food waste per capita annually,&rdquo; Bisht said.</p>\r\n\r\n<p>To be certain, the problem of food waste is a global one. The UN Food and Agriculture Organization (FAO) estimates around a third of the world&rsquo;s food is being wasted &mdash; equal to approximately 1.43 billion tons every year.</p>\r\n\r\n<p>Similar are the conclusions of a 2020 report by Deloitte, the professional services network, which not only shows that 33 percent of food produced globally is wasted but expects this figure to rise over the course of the pandemic.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://www.arabnews.com/sites/default/files/userimages/17/arno_burgi_dpa_afp1.jpg\" style=\"height:617px; width:1000px\" /></p>\r\n\r\n<p><br />\r\n33 percent of food produced globally is wasted. (AFP)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;(This is) due to catering industry companies that need to get rid of expired food products, food production companies that are forced to switch their portfolio from out-of-home products to food retail products and (unnecessary) food hoarding by consumers,&rdquo; the report said.</p>\r\n\r\n<p>The Dubai Municipality said this year that global food waste costs around $1 trillion each year, and approximately $410 billion annually to dispose of. As for people in the UAE, it said they purchase an &ldquo;alarming amount of food&rdquo; that is surplus to requirements.</p>\r\n\r\n<p>Iannelli of Dubai Carbon says food-waste reduction is beneficial from both &ldquo;upstream and downstream&rdquo; ends. Less waste ultimately means lower production, which implies consumption of fewer resources like water, energy and transportation, resulting in lower emissions.</p>\r\n\r\n<p>The moral and ethical dimensions of the issue cannot be glossed over either given that almost one billion people worldwide are experiencing hunger. &ldquo;If only one quarter of the food wasted was saved, it would feed about 870 million hungry people across the world,&rdquo; Dubai Municipality said.</p>\r\n\r\n<p>In Yemen, more than 20 million people are food insecure and 13 million require World Food Programme (WFP) assistance to meet their daily needs, according to a 2020 WFP report. &ldquo;Another three million people are at risk of worsening hunger as coronavirus sweeps unchecked across Yemen,&rdquo; it said.</p>\r\n\r\n<p>Food deliveries may be part of the more frugal approach to consumption, but it is not entirely free of waste. Mishandled or delayed meals can be rejected and end up in the trash. Prank calls for fake orders can also result in waste, the FAO says.</p>\r\n\r\n<p>Companies are also at fault for encouraging food waste through special offers, says Ryan Ingram, founder of UAE-based TerraLoop Food Waste Consulting.</p>\r\n\r\n<p>&ldquo;If online outlets are offering multiple bargains &mdash; buy one get one free and larger portion sizes etc. &mdash; then there may tend to be over-purchase and therefore more waste,&rdquo; he told Arab News.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://www.arabnews.com/sites/default/files/userimages/17/miguel_medina_afp.jpg\" style=\"height:1200px; width:799px\" /></p>\r\n\r\n<p><br />\r\nBecause of the coronavirus, consumers have also started buying more essential items in bulk to avoid regular trips to the store. (AFP)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Leftovers tend to find their way into the trash as takeaway food often has a shorter shelf life than home-cooked meals, Ingram said.</p>\r\n\r\n<p>Clearly, consumer habits in the Middle East will take time to adjust. Meanwhile, governments, international organizations and influential public figures can do their bit.</p>\r\n\r\n<p>The issue of reducing food waste is highlighted in the UN&rsquo;s Sustainable Development Goals (SDGs), with Goals 2 and 12 calling for achieving zero hunger, and halving food waste and reducing food loss by 2030, respectively.</p>\r\n\r\n<p>&ldquo;Food loss and waste is an ethical outrage. In a world with enough food to feed all people, everywhere, 690 million people continue to go hungry and 3 billion cannot afford a healthy diet,&rdquo; Antonio Guterres, the UN secretary-general, said in a message on Sept. 19, the first ever International Day of Awareness of Food Loss and Waste Reduction.</p>\r\n\r\n<p>In the UAE, the National Committee for Reducing Food Waste and Loss has set up initiatives to help lower the rate of food waste by 15 percent by the end of 2021, according to a report by the business news agency Zawya.</p>\r\n\r\n<p>&ldquo;We have a habit of excess that we need to restrain,&rdquo; Abu Dhabi Crown Prince Sheikh Mohamed bin Zayed told an online Ramadan majlis in May. &ldquo;If this excess or overspending is for a good cause, like charity, it is good and we support it, but overspending for no reason is bad.&rdquo;</p>\r\n\r\n<p>With luck, mass vaccination campaigns should draw the curtain on the coronavirus pandemic by the middle of 2021, allowing the hospitality sector to flourish once again. But experts believe the pandemic-driven shift to online retail from brick-and-mortar stores is likely to continue. Only time will tell whether the trend will also lead to a lasting culture of conscientious food consumption.<br />\r\n<br />\r\n<a href=\"https://www.arabnews.com/node/1774936/middle-east\">article link&nbsp;</a></p>\r\n<style type=\"text/css\">.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}\r\n</style>', '1618882411.jpg', '2021-04-20 01:31:05', '2021-04-20 08:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `user_id`, `comment_body`, `created_at`, `updated_at`) VALUES
(4, 7, 1, 'Such a lose', '2021-04-20 09:05:46', '2021-04-20 09:05:46'),
(5, 7, 11, 'wow', '2021-04-28 21:54:17', '2021-04-28 21:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_email`, `contact_name`, `contact_message`, `created_at`, `updated_at`) VALUES
(3, 'ahmad@mail.com', 'ahamad', 'i have issue pls email me asap', '2021-04-27 13:05:48', '2021-04-27 13:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `question_context` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_owner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_23_200218_create_admins_table', 1),
(5, '2021_02_23_200835_create_articles_table', 1),
(6, '2021_02_23_201142_create_contacts_table', 1),
(7, '2021_02_23_201553_create_training_centers_table', 1),
(8, '2021_02_23_201811_create_services_table', 1),
(9, '2021_02_23_204224_create_service_user_table', 1),
(10, '2021_02_25_072037_create_faqs_table', 1),
(11, '2021_02_26_215220_create_comments_table', 1),
(12, '2021_04_17_135104_make_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Service_giver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giver_id` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_desc`, `service_type`, `service_image`, `created_at`, `updated_at`, `Service_giver`, `giver_id`) VALUES
(18, 'manasf', 'big plate of Jordanian mansaf with jameed karaki', 'Food', '1619042982.png', '2021-04-21 22:09:42', '2021-04-21 22:09:42', 'ahmad emar', 2),
(19, 'Maqluba', 'Maqluba with meat made yesterday with salad enough for 2 persons', 'Food', '1619093453.png', '2021-04-22 12:10:53', '2021-04-22 12:10:53', 'anas aljawabrah', 3),
(20, 'Cooking steamer', 'Cooking steamer used for less then 6 months in good condition', 'Non-Food', '1619093568.jpg', '2021-04-22 12:12:48', '2021-04-22 12:12:48', 'diaa jamel', 5),
(21, 'big mac', 'Chicken big mac meal (fries,cola) i bought 2 and i only eat one', 'Food', '1619094085.jpg', '2021-04-22 12:21:25', '2021-04-22 12:21:25', 'waed dawaghrah', 6),
(22, 'Orange mifi', 'Orange mifi unlocked in perfect condition with charging cable', 'Non-Food', '1619094861.jpg', '2021-04-22 12:34:21', '2021-04-22 12:34:21', 'alaa mohammad', 11),
(25, 'microwave', 'microwave used for less than 7 months in mint condition', 'Non-Food', '1619350866.jpg', '2021-04-25 11:41:06', '2021-04-25 11:41:06', 'waed dawaghrah', 6),
(26, 'Fried chicken', 'Fried chicken with french fries', 'Food', '1619463914.jpeg', '2021-04-26 19:05:14', '2021-04-26 19:05:14', 'ayham zaid', 4),
(27, 'Mixed grill', 'Mixed grill lamb, chicken and meat and grilled tomato\'s with french fries its enough for small family', 'Food', '1619464154.jpeg', '2021-04-26 19:09:14', '2021-04-26 19:09:14', 'ayham zaid', 4),
(28, 'Nougat', 'Mixed nougat made with honey, roasted nuts, whipped egg whites, and sometimes chopped candied fruit.', 'Food', '1619464765.jpeg', '2021-04-26 19:19:25', '2021-04-26 19:19:25', 'amal aldajeh', 12),
(29, 'Biryani', 'big plate of camel meat dish biryani with salad it will feed 6 persons', 'Food', '1619465145.jpeg', '2021-04-26 19:25:45', '2021-04-26 19:25:45', 'amal aldajeh', 12),
(30, 'Adana kebab', 'Adana kebab plate beef lavash with bread and sauce', 'Food', '1619466399.jpeg', '2021-04-26 19:46:39', '2021-04-26 19:46:39', 'salameh yasin', 10),
(31, 'lahmacun manoush', 'lahmacun manoush with lemons 15 pieces', 'Food', '1619467736.jpeg', '2021-04-26 20:08:56', '2021-04-26 20:08:56', 'salameh yasin', 10);

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE `service_user` (
  `service_user_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_user`
--

INSERT INTO `service_user` (`service_user_id`, `user_id`, `service_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(13, 1, 18, NULL, NULL, NULL, NULL),
(16, 8, 21, NULL, NULL, NULL, NULL),
(18, 1, 22, NULL, NULL, NULL, NULL),
(19, 1, 22, NULL, NULL, NULL, NULL),
(35, 6, 25, NULL, NULL, NULL, NULL),
(36, 1, 22, NULL, NULL, NULL, NULL),
(37, 11, 22, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_age` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `national_id`, `user_name`, `user_number`, `password`, `email`, `user_image`, `user_age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'abdallah', '0798513276', '$2y$10$5B9.5/ND76Tsry33rJVyc.4gzbXRC.BtkiuSHwY.Nwu/p.NHftW/u', 'abdallah@mail.com', '1618789341.jpg', 18, NULL, '2021-04-17 16:06:47', '2021-04-18 23:42:21'),
(2, NULL, 'ahmad emar', '0798870786', '$2y$10$LENe6opbGpNvtM1bNB5Y6OBUYS0QasjAwhVQTVkQsaxeiNt0TOJye', 'ahmad@mail.com', '1619005163.jpg', 25, NULL, '2021-04-21 11:38:30', '2021-04-21 11:39:23'),
(3, NULL, 'anas aljawabrah', '0795873658', '$2y$10$5OpKCeGm0N1d8WX/25Zy/etH0d5zeO/saAxMx5mTeirvkV46TLmWq', 'anas@mail.com', '1619005584.jpg', 26, NULL, '2021-04-21 11:40:32', '2021-04-21 11:46:24'),
(4, NULL, 'ayham zaid', '0798578796', '$2y$10$tI/284VlhEGPT8Igp.TOf.6szPCEdkm/QtAhUc4vCfhBiZJqMai/S', 'ayham@mail.com', '1619005690.jpg', 28, NULL, '2021-04-21 11:47:14', '2021-04-21 11:48:10'),
(5, NULL, 'diaa jamel', '0798756895', '$2y$10$9SRINKKar5CoHEc.Jh4vSuX64ArsmvZ/zrA/hkTW6nwBNm4OzGWy.', 'diaa@mail.com', '1619006058.jpg', 26, NULL, '2021-04-21 11:52:30', '2021-04-21 11:54:18'),
(6, NULL, 'waed dawaghrah', '0795467893', '$2y$10$bTxMB3/EJG7Bb6x2oDRfR.m5o7plPLRWeBrM09FV0gkHRjbG0O5FG', 'waed@mail.com', '1619006155.jpg', 28, NULL, '2021-04-21 11:55:05', '2021-04-21 11:55:55'),
(7, NULL, 'sarah eswad', '0795786897', '$2y$10$k/yjC18wI1fyNkSrvqlDseVZyT9Q2kM6QWfUTRs0yf4zbpes.ntNe', 'sarah@mail.com', '1619006223.jpg', 24, NULL, '2021-04-21 11:56:33', '2021-04-21 11:57:03'),
(8, NULL, 'osama abu rabea', '0777857965', '$2y$10$gd.4GGbIYJYRmF0aJXXtwedqpPRWOuDCy/ZZJfEUvf3gJ6jp1.Yiu', 'osama@mail.com', '1619006327.jpg', 19, NULL, '2021-04-21 11:58:17', '2021-04-21 11:58:47'),
(9, NULL, 'hala hyasat', '0785768795', '$2y$10$vWB5XZP5FosaEEfFIb4g0ulaaIYPVPCX0Lqw4x5pZMs2Rqyu.O/vK', 'hala@mail.com', '1619006523.jpg', 29, NULL, '2021-04-21 12:01:30', '2021-04-21 12:02:03'),
(10, NULL, 'salameh yasin', '0778957896', '$2y$10$ChxOmS.4NVXZCETwjA09UOlEa7g0vmmLCSy61ovidrdPWyf9fIiay', 'salameh@mail.com', '1619007156.jpg', 45, NULL, '2021-04-21 12:03:00', '2021-04-21 12:12:36'),
(11, NULL, 'alaa mohammad', '0798576785', '$2y$10$3L6Tn3HyKwXv26.EDUPwUeg77Vbs3reziQgrHliwHsaeFdVtAD5AW', 'alaa@mail.com', '1619007402.jpg', 37, NULL, '2021-04-21 12:16:10', '2021-04-21 12:16:42'),
(12, NULL, 'amal aldajeh', '0795214789', '$2y$10$l7hLMZnVoUEG1hclHSHeCeZHb4jfaqVlffzy.uRp/mi4MYxuWIyKe', 'amal@mail.com', '1619007502.jpg', 21, NULL, '2021-04-21 12:17:42', '2021-04-21 12:18:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`service_user_id`),
  ADD KEY `service_user_user_id_foreign` (`user_id`),
  ADD KEY `service_user_service_id_foreign` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_national_id_unique` (`national_id`),
  ADD UNIQUE KEY `users_user_number_unique` (`user_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `question_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
  MODIFY `service_user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_user`
--
ALTER TABLE `service_user`
  ADD CONSTRAINT `service_user_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
