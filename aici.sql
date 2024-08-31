-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Agu 2024 pada 17.17
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aici`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `advanced_smart_life`
--

CREATE TABLE `advanced_smart_life` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Radar` int DEFAULT NULL,
  `Carrier_Robot` int DEFAULT NULL,
  `Gorilla` int DEFAULT NULL,
  `Obstacle_Avoidance` int DEFAULT NULL,
  `Alpha1E` int DEFAULT NULL,
  `Street_Sweeper` int DEFAULT NULL,
  `Collectorbot` int DEFAULT NULL,
  `Smart_Car` int DEFAULT NULL,
  `Robotic_Arm` int DEFAULT NULL,
  `Heavy_Equipment` int DEFAULT NULL,
  `Enabled_Life` int DEFAULT NULL,
  `Boxing_Bot` int DEFAULT NULL,
  `Final_Project_1` int DEFAULT NULL,
  `Final_Project_2` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `advanced_smart_life`
--

INSERT INTO `advanced_smart_life` (`id`, `Nama`, `Radar`, `Carrier_Robot`, `Gorilla`, `Obstacle_Avoidance`, `Alpha1E`, `Street_Sweeper`, `Collectorbot`, `Smart_Car`, `Robotic_Arm`, `Heavy_Equipment`, `Enabled_Life`, `Boxing_Bot`, `Final_Project_1`, `Final_Project_2`, `Score_Total`) VALUES
(4, 'KCAK', 5, 5, 5, 21, 24, 24, 21, 14, 41, 29, 21, 12, 21, 21, 264),
(5, 'kinan', 21, 21, 25, 26, 27, 29, 21, 28, 29, 28, 82, 38, 38, 28, 441);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ai_smart_life`
--

CREATE TABLE `ai_smart_life` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Smart_Desk_Lamp` int DEFAULT NULL,
  `Smart_Fan` int DEFAULT NULL,
  `Smart_Garage` int DEFAULT NULL,
  `Smart_Garden` int DEFAULT NULL,
  `My_AI_Home` int DEFAULT NULL,
  `Smart_Trash_Can` int DEFAULT NULL,
  `Assistant_Traffic_Police` int DEFAULT NULL,
  `Smart_Laundry_Rack` int DEFAULT NULL,
  `Electronics_Gate` int DEFAULT NULL,
  `Smart_Street_Sweeper` int DEFAULT NULL,
  `Sorting_Robotic_Arm` int DEFAULT NULL,
  `Crab_Robot` int DEFAULT NULL,
  `Self_Project_Day_1` int DEFAULT NULL,
  `Self_Project_Day_2` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ai_super_assistant`
--

CREATE TABLE `ai_super_assistant` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `uCode_Alphamini` int DEFAULT NULL,
  `Face_Unlock` int DEFAULT NULL,
  `Listen_to_My_Command_Alphamini` int DEFAULT NULL,
  `Happy_Birthday` int DEFAULT NULL,
  `Piggy_Bank` int DEFAULT NULL,
  `Forklift_Truck` int DEFAULT NULL,
  `Shooting` int DEFAULT NULL,
  `Voice_Controlled_Fan` int DEFAULT NULL,
  `Smart_Door` int DEFAULT NULL,
  `Magical_Hand` int DEFAULT NULL,
  `Waste_Sorting` int DEFAULT NULL,
  `Intelligent_Lamp` int DEFAULT NULL,
  `Final_Project_1_AI_Super_Assistant` int DEFAULT NULL,
  `Final_Project_2_AI_Super_Assistant` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fantasy_zoo`
--

CREATE TABLE `fantasy_zoo` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Cat_Eyes` int DEFAULT NULL,
  `Big_Mouth` int DEFAULT NULL,
  `Elephant` int DEFAULT NULL,
  `Dog` int DEFAULT NULL,
  `Giraffe` int DEFAULT NULL,
  `Bird_Wings` int DEFAULT NULL,
  `Snail` int DEFAULT NULL,
  `Scorpion` int DEFAULT NULL,
  `Trial` int DEFAULT NULL,
  `Fish` int DEFAULT NULL,
  `Alphamini` int DEFAULT NULL,
  `Octopus` int DEFAULT NULL,
  `Dinosaur` int DEFAULT NULL,
  `Dwarf` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `future_town`
--

CREATE TABLE `future_town` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Between_Inches` int DEFAULT NULL,
  `Master_Translator` int DEFAULT NULL,
  `Graphic_Tablet` int DEFAULT NULL,
  `We_Are_Different` int DEFAULT NULL,
  `Dialogflow` int DEFAULT NULL,
  `Look_Extension` int DEFAULT NULL,
  `Shooting_Robot_Remote` int DEFAULT NULL,
  `Remote_Control_Racing` int DEFAULT NULL,
  `AI_Drawing` int DEFAULT NULL,
  `Remote_Control_Racing_Lanjutan` int DEFAULT NULL,
  `Parking_Lot` int DEFAULT NULL,
  `Final_Project_1_Future_Town` int DEFAULT NULL,
  `Final_Project_2_Future_Town` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int NOT NULL,
  `Nama_Kelas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `Nama_Kelas`) VALUES
(1, 'Fantasy Zoo'),
(2, 'ukit Advanced'),
(3, 'AI Smart Life'),
(4, 'Advanced Smart Life'),
(5, 'AI Super Assistant'),
(6, 'Magic World'),
(7, 'Future Town');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magic_world`
--

CREATE TABLE `magic_world` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Magic_Pen` int DEFAULT NULL,
  `Fantastic_Painting_Board` int DEFAULT NULL,
  `Best_Match` int DEFAULT NULL,
  `Sandbags` int DEFAULT NULL,
  `Bus_Assistant` int DEFAULT NULL,
  `Detection_Radar` int DEFAULT NULL,
  `Car_Control` int DEFAULT NULL,
  `Audio_Display` int DEFAULT NULL,
  `Fingertip_Dancing` int DEFAULT NULL,
  `Time_Album` int DEFAULT NULL,
  `Hungry_Shark` int DEFAULT NULL,
  `Final_Project_1_Magic_World` int DEFAULT NULL,
  `Final_Project_2_Magic_World` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_individu`
--

CREATE TABLE `nilai_individu` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Bobot` int DEFAULT NULL,
  `Kelas` varchar(100) DEFAULT NULL,
  `Modul` varchar(100) DEFAULT NULL,
  `Score` float DEFAULT NULL,
  `Tutor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `nilai_individu`
--

INSERT INTO `nilai_individu` (`id`, `Nama`, `Bobot`, `Kelas`, `Modul`, `Score`, `Tutor`) VALUES
(32, 'Miran', 2, 'Advanced Smart Life', 'Final Project 2', 30, 'Ibu Ranah'),
(33, 'Morning', 21, 'AI Super Assistant', 'Intelligent Lamp', 0.05, 'Ibu Ranahs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukit_advanced`
--

CREATE TABLE `ukit_advanced` (
  `id` int NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Catapult` int DEFAULT NULL,
  `Little_Fanner` int DEFAULT NULL,
  `Drawbridge` int DEFAULT NULL,
  `Remote_Control_Forklift` int DEFAULT NULL,
  `Wheelsbot` int DEFAULT NULL,
  `Power_Steering` int DEFAULT NULL,
  `Smart_Ringer` int DEFAULT NULL,
  `Bucketbot` int DEFAULT NULL,
  `Flashing_Color` int DEFAULT NULL,
  `Spider` int DEFAULT NULL,
  `Alpha1E` int DEFAULT NULL,
  `Robo_Dance` int DEFAULT NULL,
  `Police_Car` int DEFAULT NULL,
  `Soccer` int DEFAULT NULL,
  `Score_Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `ukit_advanced`
--

INSERT INTO `ukit_advanced` (`id`, `Nama`, `Catapult`, `Little_Fanner`, `Drawbridge`, `Remote_Control_Forklift`, `Wheelsbot`, `Power_Steering`, `Smart_Ringer`, `Bucketbot`, `Flashing_Color`, `Spider`, `Alpha1E`, `Robo_Dance`, `Police_Car`, `Soccer`, `Score_Total`) VALUES
(2, 'Alex', 25, 28, 27, 27, 21, 82, 28, 28, 21, 28, 20, 39, 29, 29, 432);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'tutor', 'tutor1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `advanced_smart_life`
--
ALTER TABLE `advanced_smart_life`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ai_smart_life`
--
ALTER TABLE `ai_smart_life`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ai_super_assistant`
--
ALTER TABLE `ai_super_assistant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fantasy_zoo`
--
ALTER TABLE `fantasy_zoo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `future_town`
--
ALTER TABLE `future_town`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `magic_world`
--
ALTER TABLE `magic_world`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_individu`
--
ALTER TABLE `nilai_individu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ukit_advanced`
--
ALTER TABLE `ukit_advanced`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `advanced_smart_life`
--
ALTER TABLE `advanced_smart_life`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ai_smart_life`
--
ALTER TABLE `ai_smart_life`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ai_super_assistant`
--
ALTER TABLE `ai_super_assistant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fantasy_zoo`
--
ALTER TABLE `fantasy_zoo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `future_town`
--
ALTER TABLE `future_town`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `magic_world`
--
ALTER TABLE `magic_world`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai_individu`
--
ALTER TABLE `nilai_individu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `ukit_advanced`
--
ALTER TABLE `ukit_advanced`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
