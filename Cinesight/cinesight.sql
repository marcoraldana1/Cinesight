-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 03:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinesight`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `fileType` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `fileName`, `fileType`, `location`) VALUES
(1, 'guardians2.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\guardians2.jpg'),
(2, 'alienCovenant.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\alienCovenant.jpg'),
(3, 'wonderWoman.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\wonderWoman.jpg'),
(4, 'theMummy.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\theMummy.jpg'),
(5, 'allEyezOnMe.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\allEyezOnMe.jpg'),
(6, 'babyDriver.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\babyDriver.jpg'),
(7, 'captainAmericaCivilWar.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\captainAmericaCivilWar.jpg'),
(8, 'spidermanHomecoming.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\spidermanHomecoming.jpg'),
(9, 'theBigSick.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\theBigSick.jpg'),
(10, 'dunkirk.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\dunkirk.jpg'),
(11, 'detroit.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\detroit.jpg'),
(12, 'drStrangelove.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\drStrangelove.jpg'),
(13, 'loganLucky.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\loganLucky.jpg'),
(14, 'goodTime.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\goodTime.jpg'),
(15, 'windRiver.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\windRiver.jpg'),
(16, 'it2017.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\it2017.jpg'),
(17, 'mother.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\mother.jpg'),
(18, 'kingsmanGoldenCircle.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\kingsmanGoldenCircle.jpg'),
(19, 'bladeRunner1982.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\bladeRunner1982.jpg'),
(20, 'bladeRunner2049.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\images\\bladeRunner2049.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images_reviews`
--

CREATE TABLE `images_reviews` (
  `imageID` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `fileType` varchar(50) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images_reviews`
--

INSERT INTO `images_reviews` (`imageID`, `fileName`, `fileType`, `location`) VALUES
(1, 'arrival.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\arrival.jpg'),
(2, 'lalalandcover.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\lalalandcover.jpg'),
(3, 'warForPlanetOfApesReviewCover.png', 'image/png', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\warForPlanetOfApesReviewCover.png'),
(4, 'americanMade.png', 'image/png', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\americanMade.png'),
(5, 'happyDeathDay.png', 'image/png', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\happyDeathDay.png'),
(6, 'theSnowman.jpg', 'image/jpeg', 'C:\\xampp\\htdocs\\Cinesight\\reviewImages\\theSnowman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `podcast_files`
--

CREATE TABLE `podcast_files` (
  `podcastID` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `fileType` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podcast_files`
--

INSERT INTO `podcast_files` (`podcastID`, `fileName`, `fileType`, `location`) VALUES
(1, 'guardians2.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\guardians2.mp3'),
(2, 'alienCovenant.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\alienCovenant.mp3'),
(3, 'wonderWoman.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\wonderWoman.mp3'),
(4, 'theMummy.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\theMummy.mp3'),
(5, 'allEyez.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\allEyez.mp3'),
(6, 'babyDriver.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\babyDriver.mp3'),
(7, 'captainAmericaCivilWar.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\captainAmericaCivilWar.mp3'),
(8, 'spidermanHomecoming.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\spidermanHomecoming.mp3'),
(9, 'theBigSick.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\theBigSick.mp3'),
(10, 'dunkirk.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\dunkirk.mp3'),
(11, 'detroit.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\detroit.mp3'),
(12, 'drStrangelove.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\drStrangelove.mp3'),
(13, 'loganLucky.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\loganLucky.mp3'),
(14, 'goodTime.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\goodTime.mp3'),
(15, 'windRiver.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\windRiver.mp3'),
(16, 'it2017.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\it2017.mp3'),
(17, 'mother.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\mother.mp3'),
(18, 'kingsmanGoldenCircle.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\kingsmanGoldenCircle.mp3'),
(19, 'bladeRunner1982.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\bladeRunner1982.mp3'),
(20, 'bladeRunner2049.mp3', 'audio/mp3', 'C:\\xampp\\htdocs\\Cinesight\\podcasts\\audio\\bladeRunner2049.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `podcast_info`
--

CREATE TABLE `podcast_info` (
  `podcastID` int(11) NOT NULL,
  `podcastName` varchar(100) NOT NULL,
  `releaseDate` varchar(20) NOT NULL,
  `reviewedBy` varchar(40) NOT NULL,
  `runtimeHours` varchar(30) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `airDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podcast_info`
--

INSERT INTO `podcast_info` (`podcastID`, `podcastName`, `releaseDate`, `reviewedBy`, `runtimeHours`, `genre`, `airDate`) VALUES
(1, 'Guardians of the Galaxy Volume 2', '2017-05-05', 'Juan, Chris, Adrian', '2 hours 16 minutes', 'Action, Adventure, Sci-fi', '2017-05-06'),
(2, 'Alien Covenant', '2017-05-19', 'Juan, Chris, Adrian', '2 hours 2 minutes', 'Horror, Sci-Fi, Thriller', '2017-05-23'),
(3, 'Wonder Woman', '2017-06-02', 'Juan, Chris, Adrian', '2 hours 21 minutes', 'Action, Adventure, Fantasy', '2017-06-03'),
(4, 'The Mummy', '2017-06-09', 'Juan, Chris, Adrian', '1 hour 50 minutes', 'Action, Adventure, Fantasy', '2017-06-10'),
(5, 'All Eyez on Me', '2017-06-16', 'Juan, Chris, Adrian', '2 hours 19 minutes', 'Biography, Drama, Music', '2017-06-17'),
(6, 'Baby Driver', '2017-06-28', 'Juan, Chris, Adrian', '1 hour 52 minutes', 'Action, Crime, Music', '2017-06-28'),
(7, 'Captain America: Civil War', '2016-05-06', 'Juan, Chris, Adrian', '2 hours 27 minutes', 'Action, Adventure, Sci-Fi', '2017-07-06'),
(8, 'Spiderman: Homecoming', '2017-07-07', 'Juan, Chris, Adrian', '2 hours 13 minutes', 'Action, Adventure, Sci-Fi', '2017-07-08'),
(9, 'The Big Sick', '2017-07-14', 'Juan, Chris, Adrian', '2 hours ', 'Comedy, Drama, Romance', '2017-07-15'),
(10, 'Dunkirk', '2017-07-21', 'Juan, Chris, Adrian', '1 hour 46 minutes', 'Action, Drama, History', '2017-07-24'),
(11, 'Detroit', '2017-08-04', 'Juan, Chris, Adrian', '2 hours 23 minutes', 'Crime, Drama, History', '2017-08-02'),
(12, 'Dr. Strangelove', '1964-01-29', 'Juan, Chris, Adrian', '1 hour 35 minutes', 'Comedy, War', '2017-08-12'),
(13, 'Logan Lucky', '2017-08-18', 'Juan, Chris, Adrian', '1 hour 58 minutes', 'Comedy, Crime, Drama', '2017-08-22'),
(14, 'Good Time', '2017-08-25', 'Juan, Chris, Adrian', '1 hour 41 minutes', 'Crime, Drama, Thriller', '2017-08-30'),
(15, 'Wind River', '2017-08-18', 'Juan, Chris, Adrian', '1 hour 47 minutes', 'Crime, Drama, Mystery', '2017-09-05'),
(16, 'IT (2017)', '2017-09-08', 'Juan, Chris, Adrian', '2 hours 15 minutes', 'Horror, Thriller', '2017-09-12'),
(17, 'Mother!', '2017-09-15', 'Juan, Chris, Adrian, Sam', '2 hours 1 minute', 'Drama, Horror, Mystery', '2017-09-19'),
(18, 'Kingsman: The Golden Circle', '2017-09-22', 'Juan, Chris, Adrian, Sam', '2 hours 21 minutes', 'Action, Adventure, Comdey', '2017-09-27'),
(19, 'Blade Runner', '1982-06-25', 'Juan, Chris, Adrian, Sam', '1 hour 57 minutes', 'Sci-Fi, Thriller', '2017-10-03'),
(20, 'Blade Runner 2049', '2017-10-06', 'Juan, Chris, Adrian, Sam', '2 hours 44 minutes', 'Mystery, Sci-fi, Thriller', '2017-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_content`
--

CREATE TABLE `reviews_content` (
  `reviewID` int(11) NOT NULL,
  `mainHeading` varchar(150) NOT NULL,
  `mainParagraph` text NOT NULL,
  `subheading1` varchar(150) NOT NULL,
  `subParagraph1` text NOT NULL,
  `subheading2` varchar(150) NOT NULL,
  `subParagraph2` text NOT NULL,
  `endHeading` varchar(150) NOT NULL,
  `endParagraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_content`
--

INSERT INTO `reviews_content` (`reviewID`, `mainHeading`, `mainParagraph`, `subheading1`, `subParagraph1`, `subheading2`, `subParagraph2`, `endHeading`, `endParagraph`) VALUES
(1, 'Introduction', 'Science Fiction strives to push cinema boundaries to new extremes - always wanting to \"boldly go where no one has gone before.\" Arrival, by Prisoners and Sicario director Denis Villenueve, will certainly be looked back on as a film that nudged the genre forward. That\'s not to say that all other sci-fi films of 2016 haven\'t been great; however, none have been ground-breaking like Arrival. This is Villenueve\'s eighth film, and a more in-depth glimpse of his storytelling style. Arrival\'s plot is based off the short story, \"Story of Your Life\" by Ted Chiang, and adapted by Eric Heisserer. Villenueve is no stranger to the slow reveal, which I understand can feel a bit cumbersuom. In this case, though, it doesn\'t feel like a task at all. Arrival should be looked at as a sci-fi landmark film, even though it has not been brought in like the kind of money that a production company usually strives for.', 'Story (Spoiler Free)', 'Louise Baker, a linguist expert and professor, is called upon for her communication expertise when 12 UFOs appear across the world. In a very non-traditional manner, the UFOs arrive in low populated areas (take that Independence Day.) The main story takes place in Montana due to low population density and high electrical activity - which is very interesting as a plot device. That\'s not where the store begins, though: it starts with Lousie discussing the life and death of her daughter. Once that is shown, we see Forest Whittaker as Colonel Weber and Jeremy Renner as theoretical physicist Ian Halpern, noth flying shotgun with her en route to a military base. After arriving, the movie spends little time breiefing you on what to expect and instead throws the view into the anxiety of our main characters.\r\n\r\nDiscussing the story of Arrival is really discussing how beautifully woven together this film is. The film isn\' about its story so much as delivery of the message, and the message is so wonderfully done that it almost feels poetic. The film\'s flashbacks are truly key, but not in any Shymalan sort of way. There\'s no real twist to the movie, nor is there an ending that you can\'t see coming - but the way in which viewers recieve the message is what makes this film incredible.', 'Visuals (Mild Spoilers)', 'Imagery is one of the most important motifs of Arrival. This film conveys the importance of communication, which reveals itself as a cornerstone of the story and message. The cinematography was masterfully done, with films like 2001: A Space Odyseey in mind, but doesn\'t steer far away from Denis Villenueve\'s previously exhibited style. Arrival\'s spacecraft visually mirror 2001\'s \"Monolity\", one obvious homage to classic sci-fi. The fact that the ships even float vertically, like the monoliths did, showcases the figures as a towering and imposing. VIllenueve emphasizes scale in this film, making it clear that we are not alone but that we aren\'t as insignificant in the universe as we may assume.\r\n\r\nStunning landscape shots throughout this movie make the viewer forget most of the plot takes place in one location. The moments that show the scale of the Montana mountains are remarkable. A beautiful blend of colors mix as you watch mist rise from the mountains - such a seemingly unimportant detail does lend a little magic to the story. Other shots involving the ship\'s interior really make you feel as though you\'ve entered another planet. An alien atmospehere is build for the audience inside the ships, using a combination of manipulated gravity, the aliens\' method of communication, and the foggy air that surrounds them. I can\'t think of the last time I watched a film where the visuals weren\'t trying to wow the audience, but instead played a vital role in the story and supplemented the dialogue. This excellent decision makes the film feel cohesive and impassioned, instead of a mindless, sewn together mess like many summer blokbusters.', 'Final Thoughts', 'Arrival may not push extreme thematic or visual boundaries like some of its predecessors, but it does push the genre to new heights. In a year that has been lackluster for big production companies, it\'s great to see a movie like Arrival on the big screen. Mid-budget films of this quality are great gems for the wold of cinemat and feel strangely more intimite when viewed on a big screen. I think this will be the best in sci-fi for 2016, with Midnight Special as a close second. In my opinion, this film does everything that Interstellar couldn\'t do, but tried to do - and more. If you couldn\'t follow the final act of Interstellar, then I highly suggest seeing Arrival for a less convoluted story with many similar elements. However, I would suggest this film to anyone - not just the fans of Interstellar or even sci-fi in general. Arrival\'s message will resonate with everyone, regardless of their typical movie preferences.'),
(2, 'Introduction', 'Damien Chazelle enjoys showing off his love affair with Jazz music through film. There\'s a line in La La Land, from Emma Stone, about people loving to see the things that other people are passionate about. This movie is a perfect example of that very sentiment. La La Land is a story that follows Whiplash\'s spirit, but not intensity. This film, much like Chazelle\'s previous works, centers around the music of Justin Hurwitz. This time, however, Chazelle was tasked with orchestrating the always difficult Hollywood musical. Stars Ryan Gosling and Emma Stone lead the way through colorful Hollywood, both of whom learned to sing and dance for their roles; additionally, Gosling also learned to play piano. All preparation and productions that went into this movie paid off as the film looks and feels like a project that was cared for tenderly. Damien Chazelle paid homage to three borad themes: the history of film, the history of jazz, and the beauty of stage production - and he does a stunning job og enamoring the audience with all three.', 'Story (Slight Spoilers)', 'The story follows Mia (Emma Stone), who plays a struggling actress in the City of Angels. She deals witht the pain of not getting an acting break and having to make coffee for rent. She stumbles upuon Sebastian (Ryan Gosling), who is a jazz pianist capable of landing only the most obscure and demeaning gigs - like playing Christmas carols in a lounge or keytar in and 80\'s cover band. It should come as no surprise that Stone and Gosling have such and amazing on-screen relationship, making the audience think the two are actually falling for each other. They have a Modern American, young love approach to each other that feels both casual and intimate at the same time. Without getting into the story too deeply, it\'s worth knowing that the movie delves deeply into Hollywood nostalgia and pushes forward in terms of film and music. There is an underlying thread of the yearning to reach for what past greats accomplished and striving to be a revolutionary. The movie does start a little slow for my liking; I wasn\'t swept away by the first 25 - 30 minutes, but once the story starts you get taken in by the allure.', 'Visuals', 'This film is absolutely stunning. Color schemes and contrast make La La Land into a modern visual achievement. I will say that my background as a film history major gave me some inside information into how carefully this movie was constructed. My excitement began when the film started out with the big \"Cinemascope\" logo, presenting the wide screen of the 50\'s. I was later stunned to find out that the film\'s musical scenes were all shot in one take. Damien Chazelle wanted shots that were reminiscent of scenes starring Fred Astaire and Ginger Rogers. The film did a masterful job of editing and cross cutting between Stone and Gosling, much like the scenes between Simmons and Teller in Whiplash involving jazz communication. I would say that the most impressive piece of visual work comes in the last 30 minutes - a montage that I won\'t spoil. Much like the whole film, this segment is a visual masterpiece that doesn\'t let up until the very end.', 'Final Thoughts', 'The Hollywood musical is dying a slow death. Much like the Jazz music Gosling talks about (but also just like Gosling), Chazelle promises to not let the form of either one die on his watch. There is no better time for Emma Stsone and Ryan Gosling to set themselves apart as two leading stars, titles they have been flirting with for years. La La Land makes me excited to see what Damien Chazelle and Ryan Gosling will do with the recently announced biopic about Neil Armstrong. Chazelle has brought Jazz into the spotlight with his first three films, and now it\'s time to focus on his history background.\r\n\r\nThis film was a beautiful cinematic experience, the kind of musical that made me forget that it was a musical sometimes. Although I have a hard time connecting to musicals, I cannot leave this film out of the running for Best Picture. I can\'t wait to see what everyone in this film has in stor for us in the upcoming years.'),
(3, 'Introduction', 'Rise of the Planet of the Apes was something of a mystery when it was released back in 2011. The movie ended up being better than it had any right being considering it\'s main source material had been something of a niche camp for today\'s audience. The attempt from Tim Burton did almost everything to make sure that another Planet of the Apes movie would ever be made again by rebooting it back in the mid 2000\'s as well as despite all of the doubt, Matt Reeves took a franchise from being mediocre at best to one of the most critically acclaimed and commercially successful film franchises since the turn of the century. The camp of the original franchise had been ignored largely for this new trilogy with just enough to make you grin but not too. So when Dawn of the Planet of the Apes came out, it proved that this series has more to say than it\'s predecessor. Now with War for the Planet of the Apes out, it will be the proof that this is a worthy trilogy that can stand the test of time. It is most certainly the best trilogy of this decade and debatably one of the best since 2000 but only time and public opinion will determine that.', 'Visuals', 'I can\'t imagine this film being looked at years from now and having people say, \"Man technology has come a long way\", I feel like this film will be looked at the same way that most people look at Jurassic Park. It\'s certainly an achievement on almost every level imaginable. There was never a moment while I was watching this film that I felt as though the Apes and the events being presented were fake or unbelieveable. The grain and texture of everything from the hair of the apes to the rain in the forest was perfect. I have never seen visuals this well done in an incredibly long time. Seeing this movie in 2D was better than most 3D movies could ever dream to be. The imagery of the film was also stunning, from the graphic depiction of the apes on war crosses and the stark grey-scale contrast of the forest that they are hiding in plain sight, to the harsh winter and labor camps that are being forced on the captured Ape rebels. All of the horrifying images of war are present in the film.\r\n\r\n', 'Characters', 'I\'ll be the first to admit that I wasn\'t completely sold on this film when I had heard that Woody Harrelson line, \"This will be a planet of Apes\" in the trailer and it almost canceled my ticket purchase but I decided to give it a whirl anyway. I wasn\'t expecting to be sold on the idea that I would be cheering for the apes to succeed and then change my mind when I found out what had happened to the humans only to change my mind again and root for the apes. It\'s a very complicated objective to complete and Matt Reeves pulled it off flawlessly. You can feel the desperation from the humans from the opening shot of the film and the horror of knowing that it\'s all but the end for the race throughout but it never hits levels of worry because you know why it\'s happening and we\'re the only ones to blame for it. Ceasar, played by Andy Serkis, is going to go down as just another classic performance to add to his collection of legendary motion captured roles. I\'m not in the large majority who thinks that what he does is say as Oscar worthy as Daniel Day-Lewis does but it should certainly be recognized somehow by the Academy. It is an impressive level of method acting that can\'t be replicated by the standard method acting. The rest of the cast was terrific. Steve Zahn as the \"Bad Ape\" was great and was greatly appreciated as the comic relief to an overall stark world. Woody Harrelson turns a character that in paper should be just the run of the mill \"bad dude\" but he becomes more complex the more you get to know him.', 'Overall Impressions', 'I couldn\'t have been more pleased with the way I felt after walking out of the movie theater. I was expecting this movie to be a brainless Summer blockbuster and ended up getting a great Sci-fi commentary on animals in captivity. The way that I felt about this movie was a microcosm for the series as a whole. I was waiting for one to be bad and it just never happened. Now only time can tell where this series sits on the royalty of film trilogies. For my money, I\'d have no problem saying it\'s the best this decade (at least until the new Star Wars finishes up). The only thing I know to be true is that this franchise has cemented itself as as a memorable one in my era of cinematic achievements.'),
(4, 'Introduction', 'Tom Cruise has had a strange past couple of years. It seems like he\'s hit a point in his career where he doesn\'t make complete garbage movies but the good stuff he does is nothing more than ok. For every Edge of Tomorrow he does, he does an Oblivion. This year he followed that same pattern with the incredibly lackluster entry in Universal\'s Dark Universe \"The Mummy\". Once again he is being redeemed by a Doug Liman of Edge of Tomorrow fame. Unlike Edge of Tomorrow though, this movie seemed to be much more predictable but that didn\'t make the movie bad by any stretch of the imagination.', 'General Thoughts', 'American Made doesn\'t really try to be anything more than an informative movie but where it fails is when it was assuming that people haven\'t heard this story before. This particular story is part of a much bigger burst of stories involving Pablo Escobar that may or may not have anything to do with Breaking Bad and Narcos popularity. Regardless of where the fascination came from, I can\'t help but feel like it\'s trying to cash in on that market, which I\'ll admit is a market that I\'m a part of. All of that aside, this feels like a slightly different take on a story that reaches limits that you might not expect to come across. Going into the movie, I didn\'t have much expectation for the story and leaving I didn\'t feel like I was blown away but just mildly entertained by Cruise and intrigued by how far the stakes would keep getting. The story did feel like it succeeded by going down a checklist of qualities that make a movie good. That\'s where the movie just suffers from being just a movie that exists. I didn\'t love the movie nor did I hate, but I just am ok knowing that it was made and is a solid piece of entertainment, which is really all that Tom Cruise tries to do anymore.', 'Plot (Spoilers)', 'So Tom Cruise plays an airplane pilot named Barry Seal and he is looking for a little more excitement in his day to day operation. Enter Domhnall Gleeson\'s character that just goes by Schafer. Schafer claims to work for a company known as the \"AIC\", which is pretty much the joke for saying it\'s the CIA. Schafer offers him a job doing some hush hush work for the government involving some exchanges that I definitely missed because of quickly it was explained. Anywho, during one of his trips he crosses paths Jorge Ochoa and Pablo Escobar, who basically get him involved in the Medellin Cartel. From there on out it\'s essentially him juggling his life between his two jobs and his family life until it unsurprisingly all comes crashing down. It\'s pretty predictable to the very end even for this story especially since I\'m not used to seeing Tom Cruise die at the end of a movie. There\'s some throw away characters that don\'t seem to do anything else other than mess up Barry\'s life, like JB. JB is Barry\'s brother-in-law and you can tell from the very moment he walks on screen that he\'s gonna bring everything down and that\'s exactly what happens. Even worse his wife, Lucy played by Sarah Wright, doesn\'t have much to do in the film other than have sex with Barry and take care of his children which is a pretty offensive storyline to have and one that\'s pretty outdated, especially since I\'m sure she had more involvement than what the story was letting on.', 'Final Thoughts', 'Unlike The Mummy, this movie isn\'t offensively bad and make you question why it exist. American Made probably is the \"Best performance by Tom Cruise in years\", as it\'s being promoted as. That doesn\'t really make a high quality film. The story is pretty familiar and stays pretty predictable, but with so many better stories involving the drug trade of the 70\'s and 80\'s this one feels a lot like the Tom Cruise version of Johnny Depp\'s Blow. Which is an alright movie and is a pretty safe choice by an actor that was once almost finished but Hollywood always feels better when it has it\'s A star shining. This film is a purely entertaining film that doesn\'t do much more than make sure you\'re not falling asleep in the theater and considering there are movies out right now that I wished I could\'ve fallen asleep during (Mother!), I\'ll take a solid B film anyday over that.'),
(5, 'Introduction', 'It\'s the time of year where everything has been made spooky for the sake of \"All Hallows Eve\". This year seems like it has been particularly low in terms of the amount of horror films being churned out for holiday. It\'s not a secret that the horror genre is typically one that we at Cinesight don\'t go into much just because of the sheer lack of creativity existing within it. This is what seems to nail the final coffin in this particularly unoriginal plot. Although the only thing that doesn\'t seem unoriginal is that it is completely self aware of this in the film but that doesn\'t give it a pass because it can point out that it\'s basically another movie plot. That just means that the writer and director know that, you the viewer, didn\'t even realize that had been hoodwinked into watching an original story with very little scares from start to finish.', 'General Thoughts', 'I\'m not even going to get into the fact that the movie is trying to show off that it made a movie based on the plot of Groundhog\'s Day. What is most startling to me is that the movie isn\'t even aware enough that it\'s actually more of Edge of Tomorrow instead, in terms of plot. It goes through all of the story of Groundhog\'s Day with the execution of EoT. It carries all of the current horror movie trends that gives it the the dumb reputation that the genre has earned. The movie doesn\'t try to do anything that is ground-breaking and is satisfied that it probably made some teenagers confused for a bit and happy to see that everything worked out in the end..I think.', 'Plot Rundown', 'The story follows young college student snob, Tree Gelbman. She awakes from a long night of partying as a stuck-up sorority girl in the dorm room of the very obviously good guy, Carter. As she stumbles through her terrible person routine, we get a glimpse of all the suspects that the director is trying make you think is responsible for her deaths that happen to her at the end of the day. The film doesn\'t do much to try and make the mystery be at the forefront of the your curiosity and instead focus\' on the what would you do if you relived one day over and over (Groundhog\'s Day). That particular narrative is fine but there doesn\'t need to be a killer at the end of the movie. The story tries to make you think it\'s a slasher film but in reality it\'s a supernatural thriller. Once we get past Tree\'s realization that she is slowly losing more and more of her will to live, the viewer is stuck trying to figure out who it is that is killing her and why. You don\'t really get much of an answer as to why this is happening to her other than she is a terrible person and needs to change her outlook on life (Groundhog\'s Day). Short story made shorter, the actual killer is some escaped serial killer being held in a hospital. The conspirator for Tree\'s deaths that occur everyday is her roommate for very, very, very dumb reasons. All wrapped up let\'s make three more of these movies and put them on Hulu\'s horror movie section next Spring.', 'Final Thoughts', 'This film is nothing short of standard Hollywood film made for October. It doesn\'t really make a good franchise because there isn\'t anything to branch out from it. The characters aren\'t memorable and the story is very unoriginal. There isn\'t anything scary about the film and the both the script and dialogue are some of the most cringeworthy of the year. The fact that some of the reviews out for it so far are pretty forgiving is more of a sign of how low some writer\'s standards are for the craft of both storytelling and movie making. Granted the movie isn\'t trying to be the most challenging movie ever made and I suppose some people could have fun watching something like this. If you do, then congratulations you are a much more forgiving person than I am.'),
(6, 'Introduction', 'It\'s easy to watch The Snowman and think to yourself, \"Man, what did I just watch?\" because it\'s truly a baffling film. What starts out as a seemingly standard mystery thriller turns into a very jumbled mess of both storytelling, very cold acting style and poor production. This wasn\'t just an impossibly bad movie but it was almost impossibly entertaining to watch just how bad it really was. I could almost say that ever since I saw the movie last night that I\'ve been stuck thinking about just how bad it was. It\'s a showcase of everything you shouldn\'t do to make cohesive story and presentable film.', 'General Thoughts', 'I\'m not going to get into the plot very much simply because the plot was lost midway through the movie. Every plot device brought into the film makes the audience feel like asking, \"Wait, what?\". The movie has a way of just taking the main character \"Harry Hole\" (Yes, that\'s his name) and just dragging him through the mud of this story and story so predictable that I would be stunned if you didn\'t figure it out before the final act of the story. So the story is that there is a serial killer in this Norwegian city and Harry is put on the case with another detective, Katrine Bratt (Rebecca Ferguson). Katrine had been investigating J.K. Simmons character, Arve Stop, for reasons that the story doesn\'t really go into. Charlotte Gainsbourg plays Rakel, Harry\'s ex-wife. She delivers the most Earth shatteringly awkward dry hump of the year and maybe of the decade. She isn\'t given much to do outside of that. She has a child in the film named Oleg who might have been a robot. I can never critique child actors too much especially when this is probably the biggest movie he has been in up to this point.\r\n\r\nSo Harry and Katrine are investigating a missing persons case after he receives a derpy snowman letter from an anonymous killer and they\'re both after the maniac. I was expecting some kind of explanation as to why the snowman is the killer\'s calling card but they never seem to get into the psychology behind it. All that the snowman actually does, is make the scenes where a deaths do happen, that much more laughably bad mostly in due to how poorly constructed the snowmen are.', 'Plot (Spoilers)', 'The most truly jarring moment of the movie was when Val Kilmer makes his presence known in the film. I\'m going to start off by saying that Val Kilmer should just not have been in the film whatsoever. I understand that his condition was not at 100&perct; but if you are director, Tomas Alfredson, you just don\'t let this happen and if you do have to have it happen then it can\'t be like this. Val Kilmer plays a detective named Rafto who not only looks disturbingly bad but is not even voiced by Kilmer. That\'s right, he is dubbed over by another actor. Which to me means that he was not really able to be in this movie. Everytime he showed up on screen (3 times), he took me out of the story and I was just left stupefied by his voice not matching what his lips were saying. What\'s even more curious is that he just has a story that dissipates from the main plot. Val Kilmer\'s character was emblematic for all of the characters in The Snowman. They appeared in the movie and just drift away into the abyss of this truly terrible film. J.K. Simmons is in this movie and I\'m still not entirely sure why. He is brought in as a suspicious character but he never gets questioned or is even a suspect for these murders that appear in the movie. Then after Katrine\'s character is killed off about a third of the way through the film the story is just dropped entirely. Harry figures it out that it\'s Rakel\'s current husband who is The Snowman killer and we are supposed to be shocked that it\'s him but we are given so many cues that it\'s him that it\'s pretty funny to see that we could be treated so stupidly and not notice.', 'Final Thoughts', 'Everything about this movie is bad. It\'s incoherent, visually terrible with shaky cam lingering everywhere and just the most boring color palette you could conjure up. This movie shouldn\'t exist, it\'s an anomaly that it does and if you have the chance to skip this movie, I\'d highly advise you taking it. It\'s 2 hour run time doesn\'t help either and the random moments of Nordic EDM popping up is ridiculous to the point of losing the reason as to why you are in the theater watching this movie. Michael Fassbender, I really do love you as an actor but please start making better decisions. Tomas Alfredson, I\'d recommend leaving Universal Studios and go back to working on movies on your own terms. Good luck to everyone in this movie going forward, you\'ll need it.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_info`
--

CREATE TABLE `reviews_info` (
  `reviewID` int(11) NOT NULL,
  `reviewName` varchar(200) NOT NULL,
  `reviewedBy` varchar(100) NOT NULL,
  `runtimeHours` varchar(100) NOT NULL,
  `starring` varchar(150) NOT NULL,
  `imageName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_info`
--

INSERT INTO `reviews_info` (`reviewID`, `reviewName`, `reviewedBy`, `runtimeHours`, `starring`, `imageName`) VALUES
(1, 'Arrival', 'Juan S. Aldana', '1 hour 56 Minutes', 'Amy Adams, Jeremy Renner', 'arrival.jpg'),
(2, 'La La Land', 'Juan S. Aldana', '2 hours 8 minutes', 'Ryan Gosling, Emma Stone', 'lalalandcover.jpg'),
(3, 'War for the Planet of the Apes', 'Juan S. Aldana', '2 hours 22 Minutes', 'Andy Serkis, Woody Harrelson', 'warForPlanetOfApesReviewCover.png'),
(4, 'American Made', 'Juan S. Aldana', '1 hour 55 minutes', 'Tom Cruise', 'americanMade.png'),
(5, 'Happy Death Day', 'Juan S. Aldana', '1 hour 36 minutes', 'Jessica Rothe, Israel Broussard', 'happyDeathDay.png'),
(6, 'The Snowman', 'Juan S. Aldana', '1 hour 59 minutes', 'Michael Fassbender', 'theSnowman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userFirstName` varchar(50) NOT NULL,
  `userLastName` varchar(50) NOT NULL,
  `userAlias` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(150) NOT NULL,
  `userFavoriteMovie` varchar(75) NOT NULL,
  `userRole` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFirstName`, `userLastName`, `userAlias`, `userEmail`, `userPassword`, `userFavoriteMovie`, `userRole`) VALUES
(1, 'Administrator', 'Admin', 'CinesightAdmin', 'Cinesight2@gmail.com', '$2y$10$EL7A1zdDEygE/RV9jiwb.O53qsnRmm.eGI4T/LOWHWPpDMKptJAzO', 'The Good, The Bad, The Ugly', 'Admin'),
(2, 'Marco', 'Aldana', 'maldana25', 'marcoaldana25@yahoo.com', '$2y$10$vqgnen4vXW5D34VfDIE2geUnvuvkwCCxJplWviOVKyN.6OvQuj61q', 'The Master', 'Standard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `images_reviews`
--
ALTER TABLE `images_reviews`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `podcast_files`
--
ALTER TABLE `podcast_files`
  ADD PRIMARY KEY (`podcastID`);

--
-- Indexes for table `podcast_info`
--
ALTER TABLE `podcast_info`
  ADD PRIMARY KEY (`podcastID`);

--
-- Indexes for table `reviews_content`
--
ALTER TABLE `reviews_content`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `reviews_info`
--
ALTER TABLE `reviews_info`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `images_reviews`
--
ALTER TABLE `images_reviews`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `podcast_files`
--
ALTER TABLE `podcast_files`
  MODIFY `podcastID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `podcast_info`
--
ALTER TABLE `podcast_info`
  MODIFY `podcastID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `reviews_content`
--
ALTER TABLE `reviews_content`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reviews_info`
--
ALTER TABLE `reviews_info`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
