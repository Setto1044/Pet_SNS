-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-06-04 13:47
-- 서버 버전: 10.4.18-MariaDB
-- PHP 버전: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `termproject`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `num` int(11) NOT NULL,
  `userid` char(15) NOT NULL,
  `petname` char(10) NOT NULL,
  `username` char(10) NOT NULL,
  `comment` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `file_name` char(40) NOT NULL,
  `file_type` char(40) NOT NULL,
  `file_copied` char(40) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `liker` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`num`, `userid`, `petname`, `username`, `comment`, `regist_day`, `file_name`, `file_type`, `file_copied`, `likes`, `liker`) VALUES
(38, 'bsj1044', '화이', '배석진', '간식주라!', '2021-05-28 (17:11)', 'KakaoTalk_20210517_174010727.jpg', 'image/jpeg', '2021_05_28_17_11_47.jpg', 3, ',aaa,bsj1044,whddn4823,'),
(40, 'aaa', '뽀삐', '김철수', '뽀삐는 호랑이와도 같지!', '2021-05-28 (17:13)', 'KakaoTalk_20210517_222030563.jpg', 'image/jpeg', '2021_05_28_17_13_15.jpg', 0, ','),
(41, 'aaa', '뽀삐', '김철수', '귀여운 고양이 젤리', '2021-05-28 (17:13)', 'KakaoTalk_20210517_225316274.jpg', 'image/jpeg', '2021_05_28_17_13_32.jpg', 2, ',aaa,bsj1044,'),
(43, 'bsj1044', '화이', '배석진', '자다 일어난 멍멍이', '2021-05-28 (19:22)', 'KakaoTalk_20210517_174010727_05.jpg', 'image/jpeg', '2021_05_28_19_22_18.jpg', 1, ',bsj1044,'),
(44, 'bsj1044', '화이', '배석진', '근엄하다!', '2021-05-29 (17:57)', 'KakaoTalk_20210517_174010727_01.jpg', 'image/jpeg', '2021_05_29_17_57_13.jpg', 2, ',aaa,bsj1044,'),
(45, 'bsj1044', '화이', '배석진', '헤벌레 화이에요', '2021-05-29 (19:18)', 'KakaoTalk_20210517_174010727_02.jpg', 'image/jpeg', '2021_05_29_19_18_27.jpg', 3, ',aaa,bsj1044,user1,'),
(47, 'aaa', '뽀삐', '김철수', '졸린 냥이들~~', '2021-05-30 (06:13)', 'KakaoTalk_20210517_225214689.jpg', 'image/jpeg', '2021_05_30_06_13_40.jpg', 4, ',aaa,bsj1044,user1,lnh19,'),
(51, 'user1', '', '사용자1', '고양이 그림을 올려도 되나요..?', '2021-05-30 (11:26)', 'KakaoTalk_20210518_153106952.jpg', 'image/jpeg', '2021_05_30_11_26_44.jpg', 3, ',user1,bsj1044,lnh19,'),
(53, 'lnh19', '임나봉', '임나희', '부릅', '2021-05-30 (16:36)', 'KakaoTalk_20210517_222030563_01.jpg', 'image/jpeg', '2021_05_30_16_36_38.jpg', 2, ',lnh19,bsj1044,'),
(56, 'lnh19', '임나봉', '임나희', '쿨쿨고양이', '2021-05-31 (09:22)', 'KakaoTalk_20210517_225214689.jpg', 'image/jpeg', '2021_05_31_09_22_52.jpg', 1, ',lnh19,'),
(57, 'lnh19', '임나봉', '임나희', '요~ 찡긋', '2021-05-31 (09:59)', 'KakaoTalk_20210527_235324332.jpg', 'image/jpeg', '2021_05_31_09_59_00.jpg', 3, ',lnh19,whddn4823,bsj1044,');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `num` int(11) NOT NULL,
  `id` char(20) NOT NULL,
  `pw` char(20) NOT NULL,
  `username` char(10) NOT NULL,
  `petname` char(10) DEFAULT NULL,
  `state` char(10) NOT NULL,
  `email` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`num`, `id`, `pw`, `username`, `petname`, `state`, `email`) VALUES
(58, 'bsj1044', '001044', '배석진', '화이', 'dog', 'bsj1044@koreatech.ac.kr'),
(59, 'aaa', 'aaa', '김철수', '뽀삐', 'cat', 'aaa@naver.com'),
(60, 'vv', 'vv', '사용자1', '', 'nothing', 'user@naver.com'),
(64, 'user1', '1111', '사용자1', '', 'nothing', 'ㅁ@koreatech.ac.kr'),
(65, 'lnh19', '1234', '임나희', '임나봉', 'cat', '111@naver.com');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
