CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `descr` varchar(400) NOT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `services` (`id`, `name`, `descr`, `price`) VALUES
(2, 'Stora paketet', 'Det stora paketet innefattar all hjälp du kan behöva för att skapa en webbplats samt publicera på webbhotell', ' Enligt överenskommelse'),
(5, 'Lilla paketet', 'Tillsammans tar vi fram designen du söker. Vi bygger din webbplats och levererar filerna. Publicering och hosting ingår ej.', 'Enligt överenskommelse'),
(6, 'Brand Identity', 'För att kommunicera ett konsekvent varumärke behöver din visuella identitet vara enkel och tydlig. Vi hjälper dig med design och kan skapa mallar för olika utseenden.', 'Enligt överenskommelse'),
(13, 'Hosting & Publicering', 'Har du en webbplats som du vill publicera? Vi erbjuder hosting på våra egna servrar samt hjälp med publicering om du vill ha din webbplats någon annanstans, exempelvis på ett webbhotell.', 'Enligt överenskommelse');



CREATE TABLE `users` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'password');


ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);


ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

