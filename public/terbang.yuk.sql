CREATE TABLE `user` (
  `id` INT,
  `name` VARCHAR,
  `email` VARCHAR,
  `password` varchar(255)
);

CREATE TABLE `airports` (
  `id` INT,
  `name` VARCHAR,
  `city` VARCHAR,
  `country` VARCHAR
);

CREATE TABLE `Flights` (
  `id` INT,
  `flight_number` VARCHAR,
  `departure_airport` INT,
  `arrival_airport` INT,
  `departure_time` DATETIME,
  `arrival_time` DATETIME,
  `price` DECIMAL(10,2),
  `total_seats` INT,
  `available_seats` INT
);

CREATE TABLE `Orders` (
  `id` INT,
  `user_id` INT,
  `flight_id` INT,
  `order_date` DATE,
  `quantity` INT,
  `price_per_ticket` DECIMAL(10,2),
  `total_price` DECIMAL(10,2)
);

CREATE TABLE `ketentuan` (
  `id` imt,
  `flight_id` int,
  `name` text
);

CREATE TABLE `prifacy_refund` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `estinasi_refund` (
  `id` int,
  `id_flight` int,
  `durasi_refund` text,
  `bentuk_refund` text
);

CREATE TABLE `proses_refund_pengajuan` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `status_refund` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `more_refund` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `kebijakan_reschedule` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `periode_reschedule` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `proses_reschedule` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `biaya_reschedule` (
  `id` int,
  `id_flight` int,
  `price` text
);

CREATE TABLE `promo` (
  `id` int,
  `id_flight` int,
  `name` text
);

CREATE TABLE `admin` (
  `admin_id` INT,
  `username` VARCHAR(50),
  `password_hash` VARCHAR(255),
  `email` VARCHAR(100),
  `full_name` VARCHAR(100),
  `phone_number` VARCHAR(20),
  `role` VARCHAR(50),
  `status` ENUM(active,inactive)
);

CREATE TABLE `metode_pembayaran` (
  `id_metode` INT,
  `nama_metode` VARCHAR(50),
  `deskripsi` TEXT,
  `biaya_transaksi` DECIMAL(10,2),
  `waktu_proses` VARCHAR(50),
  `tata_cara` text,
  `nomor_rekening` text
);

ALTER TABLE `Orders` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`flight_id`) REFERENCES `Flights` (`id`);

ALTER TABLE `ketentuan` ADD FOREIGN KEY (`flight_id`) REFERENCES `Flights` (`id`);

ALTER TABLE `prifacy_refund` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `proses_refund_pengajuan` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `status_refund` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `estinasi_refund` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `more_refund` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `kebijakan_reschedule` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `periode_reschedule` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `biaya_reschedule` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `proses_reschedule` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);

ALTER TABLE `promo` ADD FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id`);
