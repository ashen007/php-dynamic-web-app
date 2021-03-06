use crop_foundation;

insert into product_dtl(category, item, brand, unit, lowest_most_ususal_price, upper_most_ususal_price, price_range,
                        avg_price, prev_week_avg_price, weekly_price_change, weekly_change, prod_img, details)
VALUES ('Fruit', 'Apples', 'Bramley seedling', 'kg', 0.88, 1.50, 0.62, 1.20, 1.23, -0.03, -2, load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\a7dd3e29-d956-4778-a0de-9fd88edb4053-9413f97.jpg'), ''),
       ('Fruit', 'Apples', 'Cox orange group', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\cox_orange_pippin_apple.jpg'), ''),
       ('Fruit', 'Apples', 'Egremont Russet', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\sp52932.jpg'), ''),
       ('Fruit', 'Apples', 'Braeburn', 'kg', 0.50, 0.50, 0.00, 0.50, 0.62, -0.12, -19, load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\apples-braeburn.jpg'), ''),
       ('Fruit', 'Apples', 'Gala', 'kg', 0.75, 1.00, 0.25, 0.93, 0.93, 0.00, 0, load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\sprzedam_owoce-świeże-jabłka-royal gala-_agro market24_ogłoszenia rolnicze-724974-39761.jpg'), ''),
       ('Fruit', 'Apples', 'Other Early Season', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\1614070375297apple.jpg'), ''),
       ('Fruit', 'Apples', 'Other Mid Season', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\triumph-apple_basket.jpg'), ''),
       ('Fruit', 'Apples', 'Other Late Season', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\late-season.jpg'), ''),
       ('Fruit', 'Blackberries', '', 'kg', '', '', '', '', 12.00, '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\blackberries 1.jpg'), ''),
       ('Fruit', 'Currants', 'Black', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\blackcurrants 3.jpg'), ''),
       ('Fruit', 'Currants', 'Red', 'kg', '', '', '', '', '', '', '', load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\red currants 1.jpg'), ''),
       ('Fruit', 'Blueberries', '', 'kg', 12.00, 12.00, 0.00, 12.00, 12.00, 0.00, 0, load_file('D:\\SERVER\\htdocs\\WT_final\\database\\products\\blueberries 1.jpg'), ''),
       ('Fruit', 'Cherries', '', 'kg', 3.00, 8.81, 5.81, 6.15, 5.57, 0.58, +10, load_file(''), ''),
       ('Fruit', 'Gooseberries', '', 'kg', 3.74, 6.17, 2.43, 5.64, 6.09, -0.45, -7, load_file(''), ''),
       ('Fruit', 'Pears', 'Conference', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Fruit', 'Pears', 'Doyenne du Comice', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Fruit', 'Pears', 'Other', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Fruit', 'Plums', 'Victoria', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Fruit', 'Plums', 'All other', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Fruit', 'Raspberries', '', 'kg', 6.40, 17.70, 11.30, 10.34, 10.72, -0.38, -4, load_file(''), ''),
       ('Fruit', 'Strawberries', '', 'kg', 0.90, 6.16, 5.26, 3.10, 1.78, 1.32, +74, load_file(''), ''),
       ('Vegetable', 'Asparagus', '', 'kg', 4.00, 12.00, 8.00, 8.66, 7.89, 0.77, +10, load_file(''), ''),
       ('Vegetable', 'Beans', 'Broad', 'kg', 1.17, 2.42, 1.25, 2.04, 1.99, 0.05, +3, load_file(''), ''),
       ('Vegetable', 'Beans', 'Dwarf, French or Kidney', 'kg', 3.52, 3.74, 0.22, 3.64, 3.58, 0.06, +2, load_file(''), ''),
       ('Vegetable', 'Beans', 'Runner Climbing', 'kg', 7.11, 7.11, 0.00, 7.11, '', '', '', load_file(''), ''),
       ('Vegetable', 'Beetroot', '', 'kg', 0.70, 0.85, 0.15, 0.78, 0.75, 0.03, +4, load_file(''), ''),
       ('Vegetable', 'Brussels Sprouts', '', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Vegetable', 'Pak choi', '', 'kg', 2.25, 3.25, 1.00, 2.84, 2.70, 0.14, +5, load_file(''), ''),
       ('Vegetable', 'Curly kale', '', 'kg', 2.80, 3.80, 1.00, 3.34, 3.47, -0.13, -4, load_file(''), ''),
       ('Vegetable', 'Cabbage', 'Red', 'kg', 0.90, 1.20, 0.30, 1.03, 1.02, 0.01, +1, load_file(''), ''),
       ('Vegetable', 'Cabbage', 'Savoy', 'head', 0.54, 0.90, 0.36, 0.67, 0.65, 0.02, +3, load_file(''), ''),
       ('Vegetable', 'Spring greens', 'Pre-packed', 'kg', 0.83, 1.16, 0.33, 1.01, 1.00, 0.01, +1, load_file(''), ''),
       ('Vegetable', 'Cabbage', 'Summer & Autumn Pointed', 'kg', 0.48, 0.75, 0.27, 0.65, 0.67, -0.02, -3, load_file(''), ''),
       ('Vegetable', 'Cabbage', 'White', 'kg', 0.55, 0.70, 0.15, 0.63, 0.62, 0.01, +2, load_file(''), ''),
       ('Vegetable', 'Cabbage', 'Round Green Other', 'head', 0.47, 0.70, 0.23, 0.52, 0.54, -0.02, -4, load_file(''), ''),
       ('Vegetable', 'Calabrese', '', 'kg', 1.76, 2.31, 0.55, 2.05, 1.57, 0.48, +31, load_file(''), ''),
       ('Vegetable', 'Capsicum', 'Green', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Vegetable', 'Capsicum', 'Red', 'kg', 1.20, 1.90, 0.70, 1.58, 2.05, -0.47, -23, load_file(''), ''),
       ('Vegetable', 'Capsicum', 'Elongated', 'kg', 1.30, 1.40, 0.10, 1.36, 1.35, 0.01, +1, load_file(''), ''),
       ('Vegetable', 'Capsicum', 'Yellow/orange', 'kg', 2.00, 2.00, 0.00, 2.00, 2.04, -0.04, -2, load_file(''), ''),
       ('Vegetable', 'Carrots', 'Topped Washed', 'kg', 0.55, 0.65, 0.10, 0.59, 0.59, 0.00, 0, load_file(''), ''),
       ('Vegetable', 'Cauliflower', '', 'head', 0.73, 1.25, 0.52, 1.06, 0.78, 0.28, +36, load_file(''), ''),
       ('Vegetable', 'Celery', 'All Washed', 'kg', 0.88, 1.20, 0.32, 1.02, 1.01, 0.01, +1, load_file(''), ''),
       ('Vegetable', 'Celeriac', '', 'kg', 0.50, 1.07, 0.57, 0.64, 0.60, 0.04, +7, load_file(''), ''),
       ('Vegetable', 'Chinese leaf (b)', '', 'kg', 1.00, 1.31, 0.31, 1.10, 1.21, -0.11, -9, load_file(''), ''),
       ('Vegetable', 'Coriander', '(Bunch)', 'kg', 1.12, 2.20, 1.08, 1.51, 1.46, 0.05, +3, load_file(''), ''),
       ('Vegetable', 'Courgettes', '', 'kg', 1.10, 1.76, 0.66, 1.29, 3.52, -2.23, -63, load_file(''), ''),
       ('Vegetable', 'Cucumbers', '', 'kg', 0.75, 1.00, 0.25, 0.88, 0.84, 0.04, +5, load_file(''), ''),
       ('Vegetable', 'Leeks', 'Trimmed', 'kg', 1.50, 1.76, 0.26, 1.67, 1.73, -0.06, -3, load_file(''), ''),
       ('Vegetable', 'Lettuce', 'Butterhead Indoor', 'head', 0.38, 0.50, 0.12, 0.40, 0.40, 0.00, 0, load_file(''), ''),
       ('Vegetable', 'Lettuce', 'Cos', 'head', 0.30, 0.80, 0.50, 0.61, 0.67, -0.06, -9, load_file(''), ''),
       ('Vegetable', 'Lettuce', 'Crisp Iceberg Type', 'head', 0.45, 0.65, 0.20, 0.54, 0.56, -0.02, -4, load_file(''), ''),
       ('Vegetable', 'Lettuce', 'Little Gem', 'twin', 0.50, 0.80, 0.30, 0.66, 0.65, 0.01, +2, load_file(''), ''),
       ('Vegetable', 'Rocket', '', 'kg', 3.60, 9.00, 5.40, 4.92, 4.66, 0.26, +6, load_file(''), ''),
       ('Vegetable', 'Mixed babyleaf salad', 'Pillow pack', 'kg', 3.60, 6.40, 2.80, 4.77, 4.78, -0.01, -0, load_file(''), ''),
       ('Vegetable', 'Onion', 'Bulb brown', 'kg', 0.13, 0.55, 0.42, 0.27, 0.40, -0.13, -33, load_file(''), ''),
       ('Vegetable', 'Onion', 'Bulb red', 'kg', '', '', '', '', 0.75, '', '', load_file(''), ''),
       ('Vegetable', 'Onion', 'Salad/spring (Bunch)', 'kg', 0.24, 0.45, 0.21, 0.37, 0.37, 0.00, 0, load_file(''), ''),
       ('Vegetable', 'Swede', '', 'kg', 0.25, 0.25, 0.00, 0.25, 0.25, 0.00, 0, load_file(''), ''),
       ('Vegetable', 'Turnip', '', 'kg', 0.65, 2.10, 1.45, 1.50, 1.41, 0.09, +6, load_file(''), ''),
       ('Vegetable', 'Parsnips', 'All Varieties', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Vegetable', 'Peas', 'Shelling All Varieties', 'kg', 1.76, 3.30, 1.54, 2.85, 3.10, -0.25, -8, load_file(''), ''),
       ('Vegetable', 'Rhubarb', 'Forced', 'kg', '', '', '', '', '', '', '', load_file(''), ''),
       ('Vegetable', 'Rhubarb', 'Outdoor', 'kg', 1.32, 1.76, 0.44, 1.49, 1.49, 0.00, 0, load_file(''), ''),
       ('Vegetable', 'Spinach', 'leaf	Loose/bunches', 'kg', 0.80, 1.50, 0.70, 1.16, 1.35, -0.19, -14, load_file(''), ''),
       ('Vegetable', 'Sweetcorn', '', 'head', '', '', '', '', '', '', '', load_file(''), ''),
       ('Vegetable', 'Tomatoes', 'Round', 'kg', 0.70, 1.30, 0.60, 1.01, 0.95, 0.06, +6, load_file(''), ''),
       ('Vegetable', 'Tomatoes', 'Vine', 'kg', 1.00, 1.10, 0.10, 1.05, 0.96, 0.09, +9, load_file(''), ''),
       ('Vegetable', 'Tomatoes', 'Cherry', 'kg', 3.20, 3.73, 0.53, 3.46, 3.00, 0.46, +15, '', ''),
       ('Vegetable', 'Tomatoes', 'Plum', 'kg', '', '', '', '', 0.95, '', '', load_file(''), '');
