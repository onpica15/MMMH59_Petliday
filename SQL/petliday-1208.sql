-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 12 月 08 日 13:40
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `petliday`
--

-- --------------------------------------------------------

--
-- 資料表結構 `index-quiz`
--

CREATE TABLE `index-quiz` (
  `sid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `index-quiz`
--

INSERT INTO `index-quiz` (`sid`, `question`, `a`, `b`) VALUES
(1, '請問飼主是室內派還是戶外派呢？', '室內派', '戶外派'),
(2, '請問毛孩較為喜歡靜態活動還是動態活動呢？', '喜歡待在家自己找東西玩，或和熟悉的人玩樂\r\n', '喜歡在外面奔跑，對其他陌生人狗不怕生'),
(3, '寵物是否有疾病', '是', '否');

-- --------------------------------------------------------

--
-- 資料表結構 `member-wishlist`
--

CREATE TABLE `member-wishlist` (
  `sid` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `member_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member-wishlist`
--

INSERT INTO `member-wishlist` (`sid`, `prod_id`, `product_name`, `active`, `member_sid`) VALUES
(1, 1, '狗來富｜帶寵物同旅遊紫南宮＆玩遍南投三日遊', '1', 12),
(2, 1, '北市街拍｜打卡寵物網美經典場景一日遊', '1', 12),
(3, 1, '寵物油畫｜與毛孩共創作課｜ Wendy老師授課', '1', 12);

-- --------------------------------------------------------

--
-- 資料表結構 `member_avatar`
--

CREATE TABLE `member_avatar` (
  `sid` int(11) NOT NULL,
  `id` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member_avatar`
--

INSERT INTO `member_avatar` (`sid`, `id`, `email`, `password`, `mobile`, `birthday`, `name`, `address`) VALUES
(1, 'boy123', 'boy123@petliday.com', 'test123', '908512320', '1995-12-05', '柯基裘', '台北市信義區大榮星街195巷28號10樓'),
(2, 'girl456', 'girl456@petliday.com', 'test456', '998513275', '1963-09-10', '戴啵啵', '花蓮縣花蓮市國盛三街233號8樓'),
(3, 'pity0507', 'pity0507@petliday.com', 'test789', '905289518', '1982-06-08', '黎筱霈', '台南市東區弘勤路2段33弄2號5樓'),
(4, NULL, 'test123@petliday.com', '123', NULL, NULL, NULL, NULL),
(5, NULL, 'test123@petliday.com', '123', NULL, NULL, NULL, NULL),
(6, NULL, 'boy123123@petliday.com', 'test123', NULL, NULL, NULL, NULL),
(7, NULL, 'boy123123@petliday.com', 'test123', NULL, NULL, NULL, NULL),
(9, NULL, 'boy123@petliday.com', '122', NULL, NULL, NULL, NULL),
(10, NULL, 'boy123@petliday.com', 'test123', NULL, NULL, NULL, NULL),
(11, NULL, 'boy123@petliday.com', 'test123', NULL, NULL, NULL, NULL),
(12, NULL, 'boy123@petliday.com', 'test123', NULL, NULL, NULL, NULL),
(13, NULL, 'boy123@petliday.com', 'test123', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `member_orders`
--

CREATE TABLE `member_orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amoumt` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member_orders`
--

INSERT INTO `member_orders` (`sid`, `member_sid`, `amoumt`, `order_date`) VALUES
(1, 1, 1000, '2019-08-08'),
(2, 1, 2500, '2020-07-02'),
(3, 1, 3300, '2020-06-28');

-- --------------------------------------------------------

--
-- 資料表結構 `member_pet`
--

CREATE TABLE `member_pet` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `breed` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `member_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member_pet`
--

INSERT INTO `member_pet` (`sid`, `name`, `breed`, `age`, `birthday`, `member_sid`) VALUES
(1, '嘟寶', '米格魯', 10, '2010-01-22', 1),
(2, 'Qbone', '柴犬', 1, '2019-09-10', 1),
(3, '黑糖', '米克斯', 6, '2014-05-05', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `order_details`
--

CREATE TABLE `order_details` (
  `sid` int(11) NOT NULL,
  `order_sid` int(11) NOT NULL,
  `product_sid` int(11) NOT NULL,
  `price_all` int(11) NOT NULL,
  `quantity_man` int(11) NOT NULL,
  `quantity_pet` int(11) NOT NULL,
  `order_name` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order_details`
--

INSERT INTO `order_details` (`sid`, `order_sid`, `product_sid`, `price_all`, `quantity_man`, `quantity_pet`, `order_name`) VALUES
(3, 1, 12, 490, 1, 1, '2020-11-20 00:32:58'),
(4, 64218, 4, 3334, 2, 1, '2020-11-10 00:32:58');

-- --------------------------------------------------------

--
-- 資料表結構 `order_list`
--

CREATE TABLE `order_list` (
  `sid` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order_list`
--

INSERT INTO `order_list` (`sid`, `order_date`, `amount`, `member_sid`) VALUES
(1, '2020-11-10 00:32:01', 3099, 2),
(7654, '2020-11-15 00:32:01', 2344, 2),
(7655, '2020-11-13 00:35:30', 6765, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `pd_area`
--

CREATE TABLE `pd_area` (
  `sid` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `area_sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `pd_area`
--

INSERT INTO `pd_area` (`sid`, `area`, `area_sid`) VALUES
(1, '北部出發', 'n'),
(2, '中部出發', 'c'),
(3, '東部出發', 'e'),
(4, '南部出發', 's');

-- --------------------------------------------------------

--
-- 資料表結構 `pd_rate`
--

CREATE TABLE `pd_rate` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment1` varchar(255) NOT NULL,
  `comment2` varchar(255) NOT NULL,
  `comment3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `pd_rate`
--

INSERT INTO `pd_rate` (`sid`, `name`, `title`, `comment1`, `comment2`, `comment3`) VALUES
(1, '愛莉師', '台東熱氣球嘉年華', '很幸運的看到起飛的景象，超級美的', '狂拍照留念，第一站就佔了很多手機記憶體耶', '明年想要再帶我們家的小可愛來看！'),
(2, 'John', '露營區很棒', '可以跟三五好友帶著寵物來露營，真的是很棒的體驗', '營區還有特別準備寵物的食材，非常貼心！', '享受了一個完美的假期'),
(3, 'Lily Alien', '六十石山金針花海', '有非常充裕的時間可以在這裡狂殺底片', '這裡實在太美了！', '我跟我們家的寵物也陷入網美的世界了 (害羞)'),
(4, '蝦哩', '三天兩夜玩得超開心', '旅行社真的太貼心了，行程充裕不緊湊。', '跟自己的寵物體驗上山下海的行程很難得！', '在這裡認識好多狗友們，開心'),
(5, '木瓜人', '都歷海灘SUP', '之前在網路上看到別人分享和狗狗一起衝浪的體驗', '想不到今天我實現了！！！', '而且有專業教練的帶領，可以非常安心的盡興玩樂！'),
(6, 'Tom Cat', '住宿與食物', '旅行社選的住宿景點，對寵物都是非常的友善', '食物也會精心準備，完全不馬虎耶！吃得超開心', 'CP值超級高的行程，推推'),
(7, '柏拉圖', '值得體驗的行程', '浮潛真的太棒了，海底的珊瑚礁非常漂亮！', '天氣超熱，遊覽車絕對非常適合', '搭中巴環七美島，司機時間抓的很充裕，也都會解說'),
(8, 'Silver Gray', 'cp值頗高的單日旅遊', '我們這團才6人，所以旅遊品質超棒的啦！', '小烏來風景區可以從玻璃天空步道欣賞壯闊的瀑布景觀', '導遊大哥一路上很細心為我們解說，體貼友善'),
(9, '比利獸', '免裝備豪華露營', '第一次體會豪華露營，真的很不錯，營區環境很舒服', '暖東峽谷步道整理的很好，很適合全家大小一起去散步', '餐食很用心，吃的很豐盛，有機會會再去住一晚。'),
(10, 'Pitty Girl', '風景優美', '自備食材。環境乾淨舒適。 很棒的懶人露營', '提供的備品也都很齊全、設想周到 會推薦朋友來', '帶上寵物還能放鬆，讚！'),
(11, '阿蓉', '汪汪地瓜園控窯', '非常愉快的控窯體驗，食材非常的充足', '導覽哥哥講解的很生動，朋友都非常踴躍發言', '謝謝店家的用心讓我們渡過了愉快的週末！'),
(12, '迷唇妹', '麻雀雖小，五臟俱全', '食材豐盛好吃，環境乾淨舒適。', '店家細心解說流程，還預備了許多孩子能參與的活動', '環境非常好，腹地廣大，很適合帶毛孩一起去玩樂');

-- --------------------------------------------------------

--
-- 資料表結構 `pd_time`
--

CREATE TABLE `pd_time` (
  `sid` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `time_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `pd_time`
--

INSERT INTO `pd_time` (`sid`, `time`, `time_sid`) VALUES
(1, '三日遊', 3),
(2, '二日遊', 2),
(3, '一日遊', 1),
(4, '活動', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `img_id` varchar(255) DEFAULT NULL,
  `cate` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price_man` varchar(255) NOT NULL,
  `price_pet` varchar(255) NOT NULL,
  `price_all` varchar(255) NOT NULL,
  `star` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`sid`, `product_name`, `img_id`, `cate`, `time`, `area`, `price_man`, `price_pet`, `price_all`, `star`, `rate`, `intro`) VALUES
(1, '上山下海玩得夠！｜熱氣球＆SUP＆金針花海 花東包車三日遊', '', '3', '48hr', 'e', '3280', '1000', '4280', '5.0', '178', '六十石山、赤科山、太麻里山為花東縱谷三大金針栽植區，賞金針花海的好去處。'),
(2, '你的瑜伽完美拍檔｜寵物也能完成的瑜伽 寵物初階瑜伽互動課程', '', '0', '3hr', 'n', '1140', '400', '1540', '4.8', '112', '寵物瑜伽：主人主動，狗狗被動。在瑜伽裡聲音是一種緩慢有規律的震動，會讓心平穩。'),
(3, '高雄寵物友善｜駁二草原拍美照＋狗民小學一日遊', '', '1', '8hr', 's', '500', '200', '700', '4.8', '46', '活力豐沛駁二藝術特區是全台唯一有輕軌通過的文創園區，一起草原上奔跑拍照。'),
(4, '一起奔跑吧｜宜蘭露營＋夜間觀星行程二日遊', '', '2', '48hr', 'n', '1200', '800', '2000', '4.8', '200', '專人搭收所有設備！帶著簡單行李就能出發，體驗宜蘭在山谷中露營。'),
(5, '柴犬大集合遊台中｜彩虹眷村＆ 豐富公園二日遊', '', '2', '48hr', 'c', '900', '500', '1400', '4.9', '273', '柴犬爸家們集合！一起猖狂遊台中景點，一起打破世界紀錄吧！'),
(6, '狗來富｜帶寵物同旅遊紫南宮＆玩遍南投三日遊', '', '3', '72hr', 'c', '1888', '888', '2776', '4.6', '325', '戴上家中的富貴寵物，一同遊南投紫南宮，毛日獨家贈送寵物護身符，把富貴帶回家。'),
(7, '帶寵物遊澎湖｜ 菊島二日遊（高雄出發）', '', '2', '48hr', 'n', '3650', '1800', '5450', '4.9', '442', '冬天的澎湖菊島也很精彩！帶上寵物走訪各大夢幻打卡點。'),
(8, '帶寵物高雄｜熱門路線旗津老街＆愛河愛之船二日遊', '', '2', '48hr', 's', '2560', '1480', '4040', '4.9', '124', '就是要跟寵物醬玩高雄，熱銷高雄經典行程，旅行專車與專業導遊，放心遊玩！'),
(9, 'busy歹吧郎ㄉ選擇｜陽明山二子坪＆熊空茶園一日遊', '', '1', '8hr', 'n', '1500', '900', '2400', '4.8', '56', '寵物就是我男/女友！？帶上他們一起漫步陽明山與山峽台灣農林熊空茶園。'),
(10, '北市街拍｜打卡寵物網美經典場景一日遊', '', '1', '8hr', 'n', '666', '360', '1026', '4.6', '434', '專業網紅帶領，台北各大網紅爭相打卡的私密景點，千萬不可錯過！'),
(11, '踏浪星辰露營｜寵物友善露營花蓮二日遊', '', '2', '48hr', 'n', '3200', '1260', '4460', '4.9', '234', '在花蓮無光害星海下入睡，早晨讓蟲鳴鳥叫喚醒，來趟放鬆身心靈的自然之旅。'),
(12, '消暑不曬黑｜寵物友善森林水上游樂區一日遊', '', '1', '8hr', 'c', '760', '350', '1110', '4.9', '124', '全園區皆能戴上寵物一起玩，森林擁有各式水上遊樂設施，專車接送，無煩惱旅行。'),
(13, 'GQ X 毛日｜寵物有善草地市集野餐日', '', '1', '8hr', 'c', '900', '200', '1100', '4.7', '134', '毛日年度聯名活動，在華山大草原上與寵物一起野餐，當日還有課種體驗活動！'),
(14, '毛日獨家｜寵物行為養成訓練速成課', '', '0', '4hr', 'n', '200', '600', '800', '4.8', '642', '由台大動物學教授暨寵物訓練師聯盟【偉偉老師】授課，了解毛寶貝的肢體語言。'),
(15, '毛日好評｜寵物服裝DIY課｜打版教起適合新手', '', '0', '4hr', 'n', '1400', '100', '1500', '5.0', '452', '自己親手做的獨一無二，20年服裝經驗老師現場教學，新手也能快速上手！'),
(16, '寵物油畫｜與毛孩共創作課｜ Wendy老師授課', '', '0', '2.5hr', 'n', '1150', '200', '1350', '4.8', '353', '毛小孩自己畫！帶毛孩一起來初體驗：主人當小畫家，寵物美容水噹噹！'),
(17, '寵物放鬆精油調製｜專業訓練師｜精油氣味課', '', '0', '2hr', 'n', '1200', '300', '1500', '4.9', '56', '現場調製出1 瓶適合自己與寵物的精油（30ml），讓放鬆香味回韻在家中。'),
(18, '聖誕寵物餅乾｜一起製作自己寶貝的造型餅乾', '', '0', '4hr', 'n', '550', '100', '650', '4.7', '262', '十二月幸福季節， 不可少的寵物造型聖誕餅乾DIY限時開課！'),
(19, '跨年party｜寵物一起加入瘋跨年', '', '0', '8hr', 'n', '1600', '600', '2200', '4.8', '183', '不需人擠人！直接包下信義區CR&G 78樓觀景台帶上心愛寵物一起跨年。'),
(20, '動手做食器｜寵物也能一同參與的食器 DIY 活動', '', '0', '3hr', 'n', '1280', '300', '1580', '4.8', '74', '立即預約peliday毛孩教室，專業師傅教學帶領製作陶瓷食器，適合親子一起體驗'),
(21, '你就是寵物的大廚｜寵物鮮食烹飪 & 營養知識教學課程', '', '0', '3hr', 'n', '990', '300', '1290', '4.9', '209', '透過營養師協助規劃後的鮮食，幫助飼主在家也能輕鬆備餐，寶貝天天吃得健康美味又營養'),
(22, 'n樂活綠油行｜台東伯朗大道 & 初鹿牧場二日遊', '', '2', '48hr', 'e', '2980', '1200', '4180', '4.6', '192', '沿海處處是美景，山川壯麗美不勝收，得天獨厚大自然的資源豐富，連假放鬆的美好去處'),
(23, '和寵物沁涼一夏｜澎湖玄武岩 & 七美雙心石滬三日遊', '', '3', '72hr', 'e', '4270', '1800', '6070', '4.8', '38', '現在訂購沙灘透明獨木舟 / SUP 行程，由專業教練帶領體驗，與毛小孩一同划舟'),
(24, '寵物陪你血拼到手軟｜桃園華泰名品城 & 春天農場一日遊', '', '1', '8hr', 'n', '780', '300', '1080', '4.8', '174', '帶你探索華泰名品城的各式生活主題，與毛孩也能輕鬆愉悅地享受購物樂趣。'),
(25, '手牽狗去散步｜墾丁龍磐公園 & 小巴里島岩一日遊', '', '1', '8hr', 's', '999', '600', '1599', '4.3', '88', '放假來屏東一日遊玩，屏東有哪些好玩的地方，來趟屏東輕旅行感受一下在地的自然風光。'),
(26, '誰是最厲害的狗狗！｜寵物親子趣味競賽三合一一日活動', '', '0', '5hr', 'c', '399', '400', '799', '4.6', '67', '本次活動特別規劃了三場的寵物趣味競賽，歡迎市民朋友帶著毛小孩們一同共襄盛舉。'),
(27, '陪你過假日｜基隆和平島公園野餐 & 市集 & 講座 & 音樂會', '', '0', '8hr', 'n', '680', '600', '1280', '4.3', '98', '在大自然的擁抱下，聆聽毛孩音樂、逛逛選物市集，只要和毛孩一起，做什麼都好快樂！'),
(28, '北海岸必去打卡點｜陰陽海＆老梅綠石槽＆象鼻岩一日遊', '', '1', '10hr', 'n', '890', '400', '1290', '4.5', '239', '包車漫遊台灣北海岸，輕鬆遊走於北海岸熱門網拍景點如老梅綠石槽、鼻頭角和陰陽海'),
(29, '苗栗樂活古風行｜南庄老街 & 景觀莊園 & 寵物二日遊', '', '2', '48hr', 'c', '2450', '1000', '3450', '4.5', '29', '民宿在南庄山區占地寬廣，帶著狗狗旅行輕鬆安心愜意，還可與狗友們交流照顧心得。'),
(30, '狗狗也想當網美｜台南藍晒圖文創園區 & 台江國家公園三日遊', '', '3', '72hr', 's', '4780', '1360', '6140', '4.9', '75', '巴克禮公園是台南之肺，公園裡常見到主人帶著毛孩散步在林間，如國外景致般的悠閒。'),
(31, '毛孩生日快樂！｜專為你家寶貝安排的寵物壽星派對活動', '', '0', '3hr', 'n', '499', '777', '1276', '4.9', '398', '生日派對讓寵物備感關愛和重視，蛋糕口味可依毛孩所需的營養及需求設計。'),
(32, '寵物也能體驗的異國風情｜宜蘭南方澳內埤海 & 三奇村二日遊', '', '2', '48hr', 'n', '3120', '1200', '4320', '4.5', '222', '台東有金城武樹的伯朗大道，宜蘭冬山鄉三奇村也有一條無電線桿的「宜蘭伯朗大道」'),
(33, '毛孩的新樂園｜水管屋寵物樂園：南投右下四角村一日遊', '', '1', '8hr', 'c', '1520', '980', '2500', '4.8', '109', '「右下四角村」樂園皆以狗狗們為出發點，還有讓主人能跟寵物同住的粉嫩繽紛水管屋。'),
(34, '帶著毛孩購物趣｜高雄寵物展 & 網美咖啡廳一日遊', '', '1', '6hr', 's', '650', '500', '1150', '4.2', '95', '集結各大寵物商聯手下殺，飼料、玩具、保健用品一應俱全！快帶毛小孩一起來玩吧！');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `index-quiz`
--
ALTER TABLE `index-quiz`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member-wishlist`
--
ALTER TABLE `member-wishlist`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member_avatar`
--
ALTER TABLE `member_avatar`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member_orders`
--
ALTER TABLE `member_orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member_pet`
--
ALTER TABLE `member_pet`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `pd_area`
--
ALTER TABLE `pd_area`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `pd_rate`
--
ALTER TABLE `pd_rate`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `pd_time`
--
ALTER TABLE `pd_time`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `index-quiz`
--
ALTER TABLE `index-quiz`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member-wishlist`
--
ALTER TABLE `member-wishlist`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_avatar`
--
ALTER TABLE `member_avatar`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_orders`
--
ALTER TABLE `member_orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_pet`
--
ALTER TABLE `member_pet`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_details`
--
ALTER TABLE `order_details`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_list`
--
ALTER TABLE `order_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7656;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pd_area`
--
ALTER TABLE `pd_area`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pd_rate`
--
ALTER TABLE `pd_rate`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pd_time`
--
ALTER TABLE `pd_time`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
