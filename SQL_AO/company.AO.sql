
CREATE DATABASE ahsen_ozturk_65685;
USE ahsen_ozturk_65685;

-- Tabela gości
CREATE TABLE guests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dane początkowe: Goście
INSERT INTO guests (name) VALUES 
('Jan Kowalski'),
('Anna Nowak'),
('Piotr Wiśniewski');

-- Tabela wiadomości
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    added_by VARCHAR(255) NOT NULL,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dane początkowe: Wiadomości
INSERT INTO messages (message, added_by) VALUES 
('Wszystkiego najlepszego z okazji urodzin!', 'Jan Kowalski'),
('Sto lat!', 'Anna Nowak'),
('Dużo zdrowia i szczęścia!', 'Piotr Wiśniewski');

-- Tabela galerii zdjęć
CREATE TABLE photos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo_name VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dane początkowe: Zdjęcia
INSERT INTO photos (photo_name) VALUES 
('zdjecie1.jpg'), 
('zdjecie2.jpg'), 
('zdjecie3.jpg'), 
('zdjecie4.jpg'), 
('zdjecie5.jpg');

-- Tabela wydarzeń
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    description TEXT
);

-- Dane początkowe: Wydarzenia
INSERT INTO events (event_name, event_date, description) VALUES 
('Urodziny Ahsen', '2025-02-15', 'Impreza urodzinowa Ahsen.');

-- Tabela użytkowników
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dane początkowe: Użytkownicy
INSERT INTO users (username, password) VALUES 
('admin', 'admin123');

-- Tabela ustawień
CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(255) NOT NULL UNIQUE,
    setting_value TEXT NOT NULL
);

-- Dane początkowe: Ustawienia
INSERT INTO settings (setting_key, setting_value) VALUES 
('site_title', 'Strona Urodzinowa'),
('welcome_message', 'Witamy na naszej stronie!');  