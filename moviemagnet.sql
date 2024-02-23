-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 11:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviemagnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `adminpassword`) VALUES
(1, 'MovieMagnet', 'MovieMagnet@123');

-- --------------------------------------------------------

--
-- Table structure for table `cinematable`
--

CREATE TABLE `cinematable` (
  `id` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `dir` varchar(100) NOT NULL,
  `cast` text NOT NULL,
  `date` date NOT NULL,
  `lang` varchar(100) NOT NULL,
  `duration` time NOT NULL,
  `genre` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `trailer_link` varchar(255) NOT NULL,
  `movie_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinematable`
--

INSERT INTO `cinematable` (`id`, `mname`, `desc`, `dir`, `cast`, `date`, `lang`, `duration`, `genre`, `image`, `trailer_link`, `movie_link`) VALUES
(814, 'Salaar: Part 1 – Ceasefire', 'The fate of a violently contested kingdom hangs on the fraught bond between two friends-turned-foes in this saga of power, bloodshed and betrayal.', 'Prashanth Neel', 'Prabhas, Prithviraj Sukumaran, Shruti Haasan', '2023-12-22', 'Telugu', '02:55:00', 'Action', 'Uploadimage/Action 1.jpg', 'https://youtu.be/4GPvYMKtrtI?si=wFLHqCI6rtyX16Pe', 'https://www.netflix.com/watch/81754780?source=35'),
(815, 'K.G.F: Chapter 2', 'In the blood-soaked Kolar Gold Fields, Rocky\'s name strikes fear into his foes, while the government sees him as a threat to law and order. Rocky must battle threats from all sides for unchallenged supremacy.', 'Prashanth Neel', 'YashSanjay, DuttRaveena, Tandon', '2022-04-14', 'Kannada', '02:48:00', 'Action', 'Uploadimage/Action 2.jpg', 'https://youtu.be/jQsE85cI384?si=RThqjifUQ7SjJQz_', 'https://www.primevideo.com/dp/amzn1.dv.gti.fd2d5f15-87c3-4672-b056-0465f1067b6d?autoplay=0&ref_=atv_cf_strg_wb'),
(816, 'Interstellar', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'Christopher Nolan', '\nMatthew McConaughey, Anne Hathaway, Jessica Chastain', '2014-11-07', 'English', '02:49:00', 'Action', 'Uploadimage/Action 3.jpg', 'https://youtu.be/zSWdZVtXT7E?si=_EbN3tumhQGuiCi6', 'https://www.netflix.com/watch/70305903?source=35'),
(817, 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', '\nAnthony Russo, Joe Russo', 'Robert Downey, Jr.Chris Evans, Mark Ruffalo', '2019-04-26', 'English', '02:49:00', 'Action', 'Uploadimage/Action 4.jpg', 'https://youtu.be/TcMBFSGVi1c?si=zHa6616eV-ZTsDM7', 'https://www.hotstar.com/in/movies/avengers-endgame/1260013556/watch?utm_source=gwa'),
(818, 'Jawan', 'A high-octane action thriller which outlines the emotional journey of a man who is set to rectify the wrongs in the society.', 'Atlee', '\nShah Rukh Khan, Nayanthara, Vijay Sethupathi', '2023-09-07', 'Hindi', '03:02:00', 'Action', 'Uploadimage/Action 5.jpg', 'https://youtu.be/MWOlnZSnXJo?si=YQ_vSzn9u6yaYv0I', 'https://www.netflix.com/watch/81493411?source=35'),
(819, 'Fast X', 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes.', 'Louis Leterrier, Justin Lin', 'Vin Diesel, Michelle Rodriguez, Jason Statham', '2023-05-19', 'English', '02:21:00', 'Action', 'Uploadimage/Action 6.jpg', 'https://youtu.be/32RAq6JzY-w?si=R5WV5VEg1q1TSprM', 'https://www.jiocinema.com/movies/fast-x/3825785/watch?utm_source=WatchAction&utm_medium=MovieWatchAction&utm_campaign=fast-x'),
(820, 'The Amazing Spider-Man', 'After Peter Parker is bitten by a genetically altered spider, he gains newfound, spider-like powers and ventures out to save the city from the machinations of a mysterious reptilian foe.', '\nMarc Webb', '\nAndrew Garfield, Emma Stone, Rhys Ifans', '2012-06-29', 'English', '02:16:00', 'Action', 'Uploadimage/Action 7.jpg', 'https://youtu.be/-tnxzJ0SSOw?si=Wuwt9sLXIGg7xOyn', 'https://www.jiocinema.com/movies/the-amazing-spider-man-hindi/3879083/watch?utm_source=WatchAction&utm_medium=MovieWatchAction&utm_campaign=the-amazing-spider-man-hindi'),
(821, 'Animal', 'The hardened son of a powerful industrialist returns home after years abroad and vows to take bloody revenge on those threatening his father\'s life.', 'Sandeep Reddy Vanga', 'Ranbir Kapoor, Anil Kapoor, Bobby Deol', '2023-12-01', 'Hindi', '03:24:00', 'Action', 'Uploadimage/Action 8.jpg', 'https://youtu.be/8FkLRUJj-o0?si=UqT949FnbuKnIUd1', 'https://www.netflix.com/watch/81436990?source=35'),
(822, 'John Wick: Chapter 2', 'After returning to the criminal underworld to repay a debt, John Wick discovers that a large bounty has been put on his life.', 'Chad Stahelski', '\nKeanu Reeves, Riccardo Scamarcio, Ian McShane', '2017-02-17', 'English', '02:02:00', 'Action', 'Uploadimage/Action 9.jpg', 'https://youtu.be/ChpLV9AMqm4?si=5Zb6snBCNJMqZv05', 'https://www.primevideo.com/dp/amzn1.dv.gti.88ba872f-b961-4d71-eba6-6e56bdc67542?autoplay=0&ref_=atv_cf_strg_wb'),
(823, 'Kantara', 'When greed paves the way for betrayal, scheming and murder, a young tribal reluctantly dons the traditions of his ancestors to seek justice.', '\nRishab Shetty', '\nRishab Shetty, Kishore Kumar G, Achyuth Kumar', '2022-09-30', 'Kannada', '02:28:00', 'Action', 'Uploadimage/Action 10.jpg', 'https://youtu.be/8mrVmf239GU?si=ToR1Sol3yYGDfVEx', 'https://www.netflix.com/watch/81656709?source=35'),
(824, 'Tenet', 'Armed with only the word \"Tenet,\" and fighting for the survival of the entire world, CIA operative, The Protagonist, journeys through a twilight world of international espionage on a global mission that unfolds beyond real time.', 'Christopher Nolan', '\nJohn David Washington, Robert Pattinson, Elizabeth Debicki', '2020-12-04', 'English', '02:30:00', 'SciFi', 'Uploadimage/Scifi 1.jpg', 'https://youtu.be/L3pk_TBkihU?si=NB2lD9PJvSVYIfzo', 'https://www.netflix.com/watch/81198930?source=35'),
(825, 'Moonfall', 'A mysterious force knocks the moon from its orbit and sends it hurtling on a collision course toward earth.', 'Roland Emmerich', 'Halle Berry, Patrick Wilson, John Bradley', '2022-02-03', 'English', '02:10:00', 'SciFi', 'Uploadimage/Scifi 2.jpg', 'https://youtu.be/00BinrRItSs?si=uYFCixASFoE8BsUZ', 'https://www.primevideo.com/dp/amzn1.dv.gti.7b6a2cda-efff-45f7-a12c-7373a1f4a7df?autoplay=0&ref_=atv_cf_strg_wb'),
(826, 'Meg 2: The Trench', 'A research team encounters multiple threats while exploring the depths of the ocean, including a malevolent mining operation.', '\nBen Wheatley', 'Jason Statham, Jing Wu, Shuya Sophia Cai', '2023-08-04', 'English', '01:56:00', 'SciFi', 'Uploadimage/Scifi 3.jpg', 'https://youtu.be/dG91B3hHyY4?si=yti0wUjKx2el8mlr', 'https://www.jiocinema.com/movies/meg-2-the-trench/3876169/watch?utm_source=WatchAction&utm_medium=MovieWatchAction&utm_campaign=meg-2-the-trench'),
(827, 'Venom', 'A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it.', '\nRuben Fleischer', '\nTom Hardy, Michelle Williams, Riz Ahmed', '2018-10-05', 'English', '01:52:00', 'SciFi', 'Uploadimage/Scifi 4.jpg', 'https://youtu.be/u9Mv98Gr5pY?si=kfO3iiSHdpDOZyzw', 'https://www.netflix.com/watch/80991034?source=35'),
(828, 'Aquaman and the Lost Kingdom', 'Black Manta seeks revenge on Aquaman for his father\'s death. Wielding the Black Trident\'s power, he becomes a formidable foe. To defend Atlantis, Aquaman forges an alliance with his imprisoned brother. They must protect the kingdom.', 'James Wan', 'Jason Momoa, Patrick Wilson, Yahya Abdul-Mateen II', '2023-12-22', 'English', '02:04:00', 'SciFi', 'Uploadimage/Scifi 5.jpg', 'https://youtu.be/UGc5Tzz19UY?si=NaVMrinq-4vNFHmQ', 'https://www.primevideo.com/dp/amzn1.dv.gti.014f54b0-7c21-4c86-87cb-f322c5e3d385?autoplay=0&ref_=atv_cf_strg_wb'),
(829, 'Godzilla: King of the Monsters', 'The crypto-zoological agency Monarch faces off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah.', '\nMichael Dougherty', '\nKyle Chandler, Vera Farmiga, Millie Bobby Brown', '2019-05-31', 'English', '02:12:00', 'SciFi', 'Uploadimage/Scifi 6.jpg', 'https://youtu.be/wVDtmouV9kM?si=Y7MaZiXqgL2WvxCV', 'https://www.jiocinema.com/movies/godzilla-king-of-the-monsters/3756714/watch?utm_source=WatchAction&utm_medium=MovieWatchAction&utm_campaign=godzilla-king-of-the-monsters'),
(830, 'Chappie', 'In the near future, crime is patrolled by a mechanized police force. When one police droid, Chappie, is stolen and given new programming, he becomes the first robot with the ability to think and feel for himself.', 'Neill Blomkamp', '\nSharlto Copley, Dev Patel, Hugh Jackman', '2015-03-06', 'English', '02:00:00', 'SciFi', 'Uploadimage/Scifi 7.jpg', 'https://youtu.be/lyy7y0QOK-0?si=ZAVH-Fe9JsAHdPpK', 'https://www.netflix.com/watch/80016588?source=35'),
(831, 'Jurassic World Dominion', 'Four years after the destruction of Isla Nublar, Biosyn operatives attempt to track down Maisie Lockwood, while Dr Ellie Sattler investigates a genetically engineered swarm of giant insects.', 'Colin Trevorrow', 'Chris Pratt, Bryce Dallas Howard, Laura Dern', '2022-06-10', 'English', '02:27:00', 'SciFi', 'Uploadimage/Scifi 8.jpg', 'https://youtu.be/fb5ELWi-ekk?si=paxukf5Tn0GI1AYW', 'https://www.netflix.com/watch/81489837?source=35'),
(832, 'The Midnight Sky', 'This post-apocalyptic tale follows Augustine, a lonely scientist in the Arctic, as he races to stop Sully and her fellow astronauts from returning home to a mysterious global catastrophe.', '\nGeorge Clooney', '\nGeorge Clooney, Felicity Jones, David Oyelowo', '2020-12-09', 'English', '01:58:00', 'SciFi', 'Uploadimage/Scifi 9.jpg', 'https://youtu.be/DXUUqr3AFKs?si=iTnWEzp9zCEThLQ7', 'https://www.netflix.com/watch/80244645?source=35'),
(833, 'Beyond Skyline', 'A tough-as-nails detective embarks on a relentless pursuit to free his son from a nightmarish alien warship.', '\nLiam O\'Donnell', '\nFrank Grillo, Bojana Novakovic, Jonny Weston', '2017-10-14', 'English', '01:46:00', 'SciFi', 'Uploadimage/Scifi 10.jpg', 'https://youtu.be/wCqP4d0tXb0?si=pngerHvhMRoobyeP', 'https://www.netflix.com/watch/80189853?source=35'),
(834, 'Phir Hera Pheri', 'Baburao, Raju and Shyam are living happily after having risen from rags to riches. Still, money brings the joy of riches and with it the greed to make more money. And so, with a don as an unknowing investor, Raju initiates a new game.', '\nNeeraj Vora', 'Akshay Kumar, Suniel Shetty, Paresh Rawal', '2006-06-09', 'Hindi', '02:33:00', 'Comedy', 'Uploadimage/Comedy 1.jpg', 'https://youtu.be/m1zMmVwWr-M?si=Ps-n0kFVFaeZkfHs', 'https://www.primevideo.com/dp/amzn1.dv.gti.da1289cd-8b26-4353-acff-d3f2c145c80a?autoplay=0&ref_=atv_cf_strg_wb'),
(835, 'Golmaal Again', 'The gang encounters with some spiritual bodies and finds out the truth about the Jamnadas Orphanage where they were brought up.', 'Rohit Shetty', '\nAjay Devgn, Arshad Warsi, Tabu', '2017-10-20', 'Hindi', '02:20:00', 'Comedy', 'Uploadimage/Comedy 2.jpg', 'https://youtu.be/VgQUwsUHdqc?si=gw_bPfk-RrkknVMc', 'https://www.primevideo.com/dp/amzn1.dv.gti.3cb07389-e228-6773-ad57-020844dcdafa?autoplay=0&ref_=atv_cf_strg_wb'),
(836, 'Munna Bhai M.B.B.S.', 'A gangster sets out to fulfill his father\'s dream of becoming a doctor. \n', 'Rajkumar Hirani', '\nSanjay Dutt, Arshad Warsi, Gracy Singh', '2003-12-19', 'Hindi', '02:36:00', 'Comedy', 'Uploadimage/Comedy 3.jpg', 'https://youtu.be/6lCGvu-hwX4?si=JG-JWCBOVXQrHkPL', 'https://www.primevideo.com/dp/amzn1.dv.gti.0eb620e0-09e4-053f-0dbe-9e498c8a1017?autoplay=0&ref_=atv_cf_strg_wb'),
(837, 'The Dictator', 'The heroic story of a dictator who risked his life to ensure that democracy would never come to the country he so lovingly oppressed.', 'Larry Charles', 'Sacha Baron Cohen, Anna Faris, John C. Reilly', '2012-05-16', 'English', '01:23:00', 'Comedy', 'Uploadimage/Comedy 4.jpg', 'https://youtu.be/BegO9nKUsBY?si=qXEVxVRQjhWewURY', 'https://www.netflix.com/watch/70228042?source=35'),
(838, 'Ted', 'John Bennett, a man whose childhood wish of bringing his teddy bear to life came true, now must decide between keeping the relationship with the bear, Ted or his girlfriend, Lori.', '\nSeth MacFarlane', '\nMark WahlbergMila KunisSeth MacFarlane', '2012-10-26', 'English', '01:46:00', 'Comedy', 'Uploadimage/Comedy 5.jpg', 'https://youtu.be/9fbo_pQvU7M?si=lqu5JKcL38cQebDX', 'https://www.jiocinema.com/movies/ted/3760402/watch?utm_source=WatchAction&utm_medium=MovieWatchAction&utm_campaign=ted'),
(839, 'Hostel Hudugaru Bekagiddare', 'When a boys\' hostel warden commits suicide, he leaves behind a note blaming some students residing on the premises for his death. The suspects must now come up with a plan to hide the body.When a boys\' hostel warden commits suicide, he leaves behind a note blaming some students residing on the premises for his death. The suspects must now come up with a plan to hide the body.', '\nNithin Krishnamurthy', '\nManjunath, Prajwal BP, Aniruddha', '2023-07-21', 'Kannada', '02:24:00', 'Comedy', 'Uploadimage/Comedy 6.jpg', 'https://youtu.be/Q0sHtYB0umM?si=g22G_uyos8BsvUr1', 'https://www.aha.video/player/movie/boys-hostel'),
(840, 'Minions: The Rise of Gru', 'The untold story of one twelve-year-old\'s dream to become the world\'s greatest supervillain.', '\nKyle Balda, Brad Ableson, Jonathan del Val', '\nSteve Carell, Pierre Coffin, Alan Arkin', '2022-07-01', 'English', '01:27:00', 'Comedy', 'Uploadimage/Comedy 7.jpg', 'https://youtu.be/6DxjJzmYsXo?si=d5sBHzEGpP6S7qkr', 'https://www.netflix.com/watch/81198916?source=35'),
(841, 'Chhichhore', 'A tragic incident forces Anirudh, a middle-aged man, to take a trip down memory lane and reminisce his college days along with his friends, who were labelled as losers.', '\nNitesh Tiwari', '\nSushant Singh Rajput, Shraddha Kapoor, Varun Sharma', '2019-09-06', 'Hindi', '02:23:00', 'Comedy', 'Uploadimage/Comedy 8.jpg', 'https://youtu.be/tsxemFX0a7k?si=ESnBRoyqcWWAzONW', 'https://www.hotstar.com/in/movies/chhichhore/1260012713/watch?utm_source=gwa'),
(842, 'PK', 'An alien on Earth loses the only device he can use to communicate with his spaceship. His innocent nature and child-like questions force the country to evaluate the impact of religious views on people.', '\nRajkumar Hirani', 'Aamir KhanAnushka SharmaSanjay Dutt', '2014-12-19', 'Hindi', '02:33:00', 'Comedy', 'Uploadimage/Comedy 9.jpg', 'https://youtu.be/SOXWc32k4zA?si=MDUCdtcPyFBmP4Xk', 'https://www.netflix.com/watch/70303496?source=35'),
(843, 'Kirik Party', 'Kirik Party is the story of a gang of mischievous students, lead by the protagonist Karna (Rakshit Shetty), who has just joined an engineering college.', '\nRishab Shetty', 'Rakshit Shetty, Rashmika Mandanna, Samyuktha Hegde', '2016-12-30', 'Kannada', '02:39:00', 'Comedy', 'Uploadimage/Comedy 10.jpg', 'https://youtu.be/IfvnbER_6sQ?si=z0UUBgx7esdPMd_f', 'https://www.jiocinema.com/movies/kirik-party/3490905'),
(844, 'Hit: The First Case', 'Vikram is a 32-year-old cop. While he is battling with his own traumatic past, the stakes get high when a girl called Preethi mysteriously disappears in Hyderabad and Vikram has to solve the case at any cost.', '\nSailesh Kolanu', 'Rajkummar Rao, Sanya Malhotra, Akhil Iyer', '2022-07-15', 'Hindi', '02:12:00', 'Crime', 'Uploadimage/Crime 1.jpg', 'https://youtu.be/JtdCIn47v5g?si=RbZ9jcN7ydBgA7Bz', 'https://www.netflix.com/watch/81436989?source=35'),
(845, 'Raatchasan', 'A sub-inspector sets out in pursuit of a mysterious serial killer who targets teen school girls and murders them brutally.', 'Ram Kumar', '\nVishnu VishalAmala PaulRadha Ravi', '2018-10-05', 'Malayalam', '02:26:00', 'Crime', 'Uploadimage/Crime 2.jpg', 'https://youtu.be/GsrN7rNch9Y?si=qAJZzmhXBFC4LkVe', 'https://www.hotstar.com/in/movies/ratsasan/1000237699/watch?utm_source=gwa'),
(846, 'Vikram Vedha', 'Vikram, a no-nonsense police officer, accompanied by Simon, his partner, is on the hunt to capture Vedha, a smuggler and a murderer. Vedha tries to change Vikram\'s life, which leads to a conflict.', 'Gayatri, Pushkar, Gowtham Selvaraj', 'Madhavan, Vijay Sethupathi, Shraddha Srinath', '2017-07-21', 'Tamil', '02:27:00', 'Crime', 'Uploadimage/Crime 3.jpg', 'https://youtu.be/1sVr-uWZPjE?si=61yENI3N8lUC1g0m', 'https://www.hotstar.com/in/movies/vikram-vedha/1000216088/watch?utm_source=gwa'),
(847, 'Mardaani', 'A female cop Shivani Shivaji Roy, working at a Mumbai Crime Branch, who sets out to confront the mastermind behind a child trafficking mafia.', '\nPradeep Sarkar', '\nRani Mukerji, Jisshu Sengupta, Anant Vidhaat', '2014-08-22', 'Hindi', '01:53:00', 'Crime', 'Uploadimage/Crime 4.jpg', 'https://youtu.be/04E-jHtWrDA?si=OQ6xy415y2p0ue0-', 'https://www.primevideo.com/dp/amzn1.dv.gti.78abea86-cb84-874a-1a88-134fe4ee3fde?autoplay=0&ref_=atv_cf_strg_wb'),
(848, 'Gangs of Wasseypur', 'A clash between Sultan and Shahid Khan leads to the expulsion of Khan from Wasseypur, and ignites a deadly blood feud spanning three generations.', '\nAnurag Kashyap', '\nManoj Bajpayee, Nawazuddin Siddiqui, Tigmanshu Dhulia', '2012-06-22', 'Hindi', '02:40:00', 'Crime', 'Uploadimage/Crime 5.jpg', 'https://youtu.be/9ZpPQdrHfl8?si=sF7ABvGA_d4zN1y1', 'https://www.netflix.com/watch/80088678?source=35'),
(849, 'Drishyam 2', 'A gripping tale of an investigation and a family which is threatened by it. Will Georgekutty be able to protect his family this time?', '\nJeethu Joseph', '\nMohanlal, Meena, Ansiba', '2021-02-19', 'Malayalam', '02:32:00', 'Crime', 'Uploadimage/Crime 6.jpg', 'https://youtu.be/0f-nd1uGsjQ?si=yxb3F3ye11c8B3U4', 'https://www.primevideo.com/detail/Drishyam-2/0PI0IFOE2K9DGDC2N6YOLYBX4O'),
(850, 'Garuda Gamana Vrishabha Vahana', 'Set in the backdrop of the coastal and cultural city of modern-day Mangaluru, Hari and his soulmate Shiva rise together to great heights only to face off as bitter enemies resulting to their own downfall and destruction.', '\nRaj B. Shetty', '\nRaj B. Shetty, Rishab Shetty, Gopalkrishna Deshpande', '2021-11-19', 'Kannada', '02:31:00', 'Crime', 'Uploadimage/Crime 7.jpg', 'https://youtu.be/BnuDHJcSd0Q?si=X1H21P8WhLpBmNCN', 'https://www.zee5.com/movies/details/garuda-gamana-vrishabha-vahana/0-0-1z571846?utm_source=google_web&utm_medium=watchaction&utm_campaign=google_watch&utm_content=garuda_gamana_vrishabha_vahana'),
(851, 'Ugramm', 'A man with a dangerous past must protect a girl from those who are hell bent on killing her. \n', '\nPrashanth Neel', '\nSri Murali, Haripriya, Thilak Shekar', '2014-02-21', 'Kannada', '02:12:00', 'Crime', 'Uploadimage/Crime 8.jpg', 'https://youtu.be/f7XQSsZLjmo?si=lfjGEiTd0Q2fJJcT', 'https://www.zee5.com/movies/details/main-hoon-fighter-baadshah/0-0-mainhoonfighterbaads?utm_source=google_web&utm_medium=watchaction&utm_campaign=google_watch&utm_content=main_hoon_fighter_baadshah'),
(852, 'Forensic', 'A female police officer in the small hill town of Mussorie and a forensic expert are together on the trail of a serial killer.', 'Vishal Furia', '\nVikrant Massey, Radhika Apte, Prachi Desai', '2022-06-24', 'Hindi', '02:14:00', 'Crime', 'Uploadimage/Crime 9.jpg', 'https://youtu.be/CZ_VAKOkI3s?si=K-Oaf7gswu62ZQUI', 'https://www.zee5.com/movies/details/forensic/0-0-1z5149852?utm_source=google_web&utm_medium=watchaction&utm_campaign=google_watch&utm_content=forensic'),
(853, 'Red Notice', 'An Interpol agent successfully tracks down the world\'s most wanted art thief with help from a rival thief. But nothing is as it seems as a series of double-crosses ensues.', 'Rawson Marshall Thurber', 'Dwayne Johnson, Ryan Reynolds, Gal Gadot', '2021-11-12', 'English', '01:58:00', 'Crime', 'Uploadimage/Crime 10.jpg', 'https://youtu.be/Pj0wz7zu3Ms?si=5yH7FwFp-NrM6fnq', 'https://www.netflix.com/title/81161626'),
(854, 'Bulbbul', 'A man returns home after years to find his brother\'s child bride now grown up and abandoned, and his ancestral village plagued by mysterious deaths.', 'Anvita Dutt', 'Triptii Dimri, Avinash Tiwary, Rahul Bose', '2020-06-24', 'Hindi', '01:34:00', 'Horror', 'Uploadimage/Horror 1.jpg', 'https://youtu.be/4MGReT9-cAg?si=R-r47TO8UmqouZpJ', 'https://www.netflix.com/watch/81029150?source=35'),
(855, 'The Black Phone', 'After being abducted by a child killer and locked in a soundproof basement, a 13-year-old boy starts receiving calls on a disconnected phone from the killer\'s previous victims.', '\nScott Derrickson', '\nMason ThamesMadeleine McGrawEthan Hawke', '2022-06-24', 'English', '01:43:00', 'Horror', 'Uploadimage/Horror 2.jpg', 'https://youtu.be/3eGP6im8AZA?si=exFJcZSXen4uIFtL', 'https://www.netflix.com/watch/81488656?source=35'),
(856, 'Pari', 'Arnab tries to help Ruksahana, who is found under mysterious circumstances in a house. He lets her stay at his home until he discovers something strange about her.', 'Prosit Roy', '\nAnushka Sharma, Parambrata Chattopadhyay, Rajat Kapoor', '2018-03-02', 'Hindi', '02:16:00', 'Horror', 'Uploadimage/Horror 3.jpg', 'https://youtu.be/PQKu78NnyvU?si=ZYmglHk3Nnwzc3IX', 'https://www.primevideo.com/dp/amzn1.dv.gti.3eb17cec-9c9b-277c-53c2-b638b6ab67a6?autoplay=0&ref_=atv_cf_strg_wb'),
(857, 'Pet Sematary: Bloodlines', 'In 1969 a young Jud Crandall and his childhood friends band together to confront an ancient evil that has gripped their hometown of Ludlow.', 'Lindsey Anderson Beer', '\nJackson White, Natalie Alyn Lind, Forrest Goodluck', '2023-09-23', 'English', '01:27:00', 'Horror', 'Uploadimage/Horror 4.jpg', 'https://youtu.be/1IgQpRyfwbE?si=dJhk6kEooDFrG_KM', 'https://www.primevideo.com/dp/amzn1.dv.gti.50d04ac8-3def-4e3c-8e67-78ad9023700c?autoplay=0&ref_=atv_cf_strg_wb'),
(858, 'Annabelle', 'A couple begins to experience terrifying supernatural occurrences involving a vintage doll shortly after their home is invaded by satanic cultists.', '\nJohn R. Leonetti', '\nWard Horton, Annabelle Wallis, Alfre Woodard', '2014-10-03', 'English', '01:39:00', 'Horror', 'Uploadimage/Horror 5.jpg', 'https://youtu.be/paFgQNPGlsg?si=zZ_DqjsyAFPj3zIP', 'https://www.primevideo.com/detail/Annabelle/0JSWPIZCP0O9U8XR8NC42XSDYM'),
(859, 'The Lair', 'When Royal Air Force pilot Lt. Kate Sinclair is shot down over Afghanistan, she finds refuge in an abandoned underground bunker where deadly man-made biological weapons - half human, half alien - are awakened.', 'Neil Marshall', 'Charlotte Kirk, Jonathan Howard, Jamie Bamber', '2022-08-25', 'English', '01:37:00', 'Horror', 'Uploadimage/Horror 6.jpg', 'https://youtu.be/-c17VW0ghIk?si=Q7Xg1iaSYv8dMUnX', 'https://www.primevideo.com/dp/amzn1.dv.gti.2bd838d2-9e6d-4f57-b9ef-c2a7f87222e0?autoplay=0&ref_=atv_cf_strg_wb'),
(860, 'It', 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 'Andy Muschietti', '\nBill Skarsgård, Jaeden Martell, Finn Wolfhard', '2017-09-08', 'English', '02:15:00', 'Horror', 'Uploadimage/Horror 7.jpg', 'https://youtu.be/xKJmEC5ieOk?si=FhD9rRkW_IIOuzvY', 'https://www.primevideo.com/dp/amzn1.dv.gti.e8b1e32a-4410-59e9-5e09-39c060a1d7bb?autoplay=0&ref_=atv_cf_strg_wb'),
(861, 'Dabbe: The Possession', 'Ahead of her wedding, Kübra is possessed by demons. When an examination reveals more horror, her friend, a psychiatrist, tries to perform an exorcism.', '\nHasan Karacadag', '\nHasan Karacadag', '2013-08-02', 'Turkish', '02:14:00', 'Horror', 'Uploadimage/Horror 8.jpg', 'https://youtu.be/GnduZWRT-rs?si=2a5snEgvkxlM53G4', 'https://www.netflix.com/watch/81043541?source=35'),
(862, 'Sijjin 6', 'A girl is haunted by an evil spirit in her family home. Several bad things begin to happen around her house and to her family members. An old character rises back and tries to save the family from their doomed fate.\n', 'Alper Mestçi', '\nMerve Ates, Adnan Koç, Dilara Büyükbayraktar', '2019-08-09', 'Turkish', '01:35:00', 'Horror', 'Uploadimage/Horror 9.jpg', 'https://youtu.be/G6WLG6If5UM?si=D_gofPYPoip6YKaY', 'https://www.primevideo.com/detail/Siccin-6/0SUZ9WCPJZCO9G757KOQS96EDS'),
(863, 'Conjuring: The Beyond', 'A sleep study goes awry when participants start to go missing. \n', '\nCalvin Morie McCarthy', '\nVictoria Grace Borrello, Steve Larkin, Jon Meggison', '2022-07-13', 'English', '01:31:00', 'Horror', 'Uploadimage/Horror 10.jpg', 'https://youtu.be/WNkjNshv2BQ?si=brJrEFt72jXeNRMk', 'https://www.primevideo.com/detail/Conjuring-The-Beyond/0JO0O0FNMNRNLRFKYCQITULOEM');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `review_content` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `movie_id`, `review_content`, `rating`, `timestamp`, `user_id`) VALUES
(129, 857, 'ds', 5, '2024-02-21 21:42:40', 2),
(130, 858, 'nice movie', 5, '2024-02-21 21:51:16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `number`, `userpassword`) VALUES
(2, 'Akash Acharya', 'akashacharya@gmail.com', '7760447896', 'akash'),
(3, 'Chirag', 'chirag@gmail.com', '9353752031', 'chirag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinematable`
--
ALTER TABLE `cinematable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cinematable`
--
ALTER TABLE `cinematable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=864;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `cinematable` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
