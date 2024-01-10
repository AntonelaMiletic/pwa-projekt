-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 12:08 PM
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
-- Database: `vjezba_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanci`
--

CREATE TABLE `clanci` (
  `id` int(11) NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `about` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `archive` int(1) NOT NULL,
  `date` date DEFAULT NULL,
  `autor` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clanci`
--

INSERT INTO `clanci` (`id`, `category`, `title`, `about`, `content`, `photo`, `archive`, `date`, `autor`) VALUES
(24, 'Politika', 'Naslov članka 1', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quae minus amet iusto repellat autem alias blanditiis, veniam quasi. Maxime ducimus quis exercitationem nobis quidem sequi, autem quod aut asperiores cupiditate a harum nulla sapiente tempora nostrum expedita nisi rem. Dolores, eligendi officia minima nam neque consequuntur magni repellat sapiente quas sit nisi quibusdam pariatur quidem nobis quia ullam reiciendis mollitia nesciunt voluptate nostrum similique est aliquid voluptatem! Ex quod modi repellat recusandae fugit impedit vero iusto, explicabo nulla laborum maxime necessitatibus minus nemo similique odit temporibus sit ut quidem ipsum non nam beatae ea! Neque aut esse officia alias impedit quos accusamus commodi repudiandae blanditiis odio minus tempore sunt sapiente aliquam mollitia distinctio voluptas, recusandae eligendi dolores minima voluptatibus maxime nesciunt. Culpa commodi odit facilis eveniet esse quaerat aliquid quisquam id dolor ut pariatur, totam doloremque eum saepe iste aliquam explicabo quod magnam expedita nam enim. Velit aliquam vitae inventore error totam amet commodi nulla a sint modi porro, reprehenderit dolores at perspiciatis, deserunt suscipit enim sed impedit doloribus illo! Animi laborum minus ipsam dolore debitis neque ducimus soluta quam velit enim eum, voluptatem nostrum eaque consequuntur atque aliquid doloribus maxime, eveniet nobis rem? Laudantium laborum sint deserunt neque.', 'slika1.png', 0, '2023-06-24', 'lala'),
(25, 'Politika', 'Naslov članka 2', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika1.png', 0, '2023-06-24', 'lala'),
(26, 'Politika', 'Naslov članka 3', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika1.png', 0, '2023-06-24', 'lala'),
(27, 'Sport', 'Naslov članka 4', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika2.png', 0, '2023-06-24', 'lala'),
(28, 'Sport', 'Naslov članka 5', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika2.png', 0, '2023-06-24', 'lala'),
(29, 'Sport', 'Naslov članka 6', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika2.png', 0, '2023-06-24', 'lala'),
(46, 'politika', 'Naslov članka 4', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika1.png', 0, '2023-06-25', 'lala'),
(62, 'Politika', 'Naslov članka 5', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsum sunt nemo suscipit. Harum officiis ad numquam? Consequatur dolore voluptatibus sequi voluptas necessitatibus quasi asperiores optio, maxime est earum, eveniet consequuntur, fuga a culpa quo velit incidunt quidem inventore. Amet a cumque repudiandae in earum nam quia, ut, consequuntur quaerat magnam quis dolorem similique. Enim, recusandae? Quibusdam aliquid fuga culpa voluptatum minima, assumenda repellendus illum dolore magnam sapiente fugiat est impedit mollitia amet aut ipsam eos facilis blanditiis voluptatem vel pariatur doloribus iure. In repellat expedita fugiat porro commodi totam sapiente nisi, incidunt facilis impedit, facere et ut fuga voluptatum ducimus iure, blanditiis earum reprehenderit quidem eveniet illo quo natus. Odit explicabo pariatur, temporibus, quas sit ipsam delectus hic et totam numquam, eaque sint! Ea eveniet inventore beatae temporibus voluptas nesciunt sequi deserunt eius quo eaque ducimus obcaecati saepe reprehenderit sint rerum autem nisi nam, sapiente molestias voluptatem, libero distinctio? Magni nobis quae ea unde, doloremque sequi id nam. Deserunt ad dolores excepturi totam, ipsam quos id velit repellat, nesciunt ut vel sit in quaerat illum repellendus corrupti vero aliquid odio! Id optio cupiditate ipsa est quaerat ipsam? Dolorum, tempore. Magnam et vero minus sapiente nemo incidunt iusto! Vel, saepe.', 'slika1.png', 0, '2023-06-25', 'lala');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `korisnicko_ime` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Antonela', 'Miletić', 'Mile', '$2y$10$ipBYQcgxm3OtGcHgvB6QquoXWKuwy1t6tiYgXWFSjBHDTV0D07bim', 0),
(2, 'lala', 'lala', 'lala', '$2y$10$Nd/KLtNDWo9k2rampmXoqebEbNMW/KF/LylgCywFVZGHitnXuo9n.', 1),
(4, 'scsc', 'cfecfwecw', 'wevcwc', '$2y$10$5fEMMbDD323h5uvB38T0PeRQkM4wRGENlsdwJCXjqFyPMIETttcF.', 0),
(5, 'scdfs', 'esfsef', 'sefes', '$2y$10$ZzPyUAE3gdWlXO.UmisDveeNUAnlbRyhXjwUQVQLAxDYHs3Eb0MZC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanci`
--
ALTER TABLE `clanci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanci`
--
ALTER TABLE `clanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
