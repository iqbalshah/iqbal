-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2011 at 04:37 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a9060655_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayats`
--

CREATE TABLE `ayats` (
  `ayat_id` int(4) unsigned zerofill NOT NULL auto_increment,
  `ayat_nmbr` tinyint(3) NOT NULL,
  `ayat_arabic` varchar(500) collate utf8_unicode_ci NOT NULL,
  `surah_id` tinyint(3) unsigned zerofill NOT NULL default '002',
  `ayat_urdu1` varchar(500) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ayat_id`),
  KEY `ayat_urdu1` (`ayat_urdu1`(333))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `ayats`
--

INSERT INTO `ayats` VALUES(0001, 1, 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 001, 'شروع الله کے نام سے جو بڑا مہربان نہایت رحم والا ہے');
INSERT INTO `ayats` VALUES(0002, 2, 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ', 001, 'سب طرح کی تعریف خدا ہی کو (سزاوار) ہے جو تمام مخلوقات کا پروردگار ہے');
INSERT INTO `ayats` VALUES(0003, 3, 'الرَّحْمَنِ الرَّحِيمِ', 001, 'بڑا مہربان نہایت رحم والا');
INSERT INTO `ayats` VALUES(0004, 4, 'مَالِكِ يَوْمِ الدِّينِ', 001, 'انصاف کے دن کا حاکم');
INSERT INTO `ayats` VALUES(0005, 5, 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ', 001, '(اے پروردگار) ہم تیری ہی عبادت کرتے ہیں اور تجھ ہی سے مدد مانگتے ہیں');
INSERT INTO `ayats` VALUES(0006, 6, 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 001, 'ہم کو سیدھے رستے چلا');
INSERT INTO `ayats` VALUES(0007, 7, 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ ', 001, 'ان لوگوں کے رستے جن پر تو اپنا فضل وکرم کرتا رہا نہ ان کے جن پر غصے ہوتا رہا اور نہ گمراہوں کے ');
INSERT INTO `ayats` VALUES(0008, 1, 'الم', 002, 'الم');
INSERT INTO `ayats` VALUES(0009, 2, 'ذَلِكَ الْكِتَابُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِلْمُتَّقِينَ', 002, 'یہ کتاب (قرآن مجید) اس میں کچھ شک نہیں (کہ کلامِ خدا ہے۔ خدا سے) ڈرنے والوں کی رہنما ہے');
INSERT INTO `ayats` VALUES(0010, 3, 'الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنْفِقُونَ ', 002, 'جو غیب پر ایمان لاتے اور آداب کے ساتھ نماز پڑھتے اور جو کچھ ہم نے ان کو عطا فرمایا ہے اس میں سے خرچ کرتے ہیں');
INSERT INTO `ayats` VALUES(0011, 4, 'وَالَّذِينَ يُؤْمِنُونَ بِمَا أُنْزِلَ إِلَيْكَ وَمَا أُنْزِلَ مِنْ قَبْلِكَ وَبِالْآخِرَةِ هُمْ يُوقِنُونَ', 002, 'اور جو کتاب (اے محمدﷺ) تم پر نازل ہوئی اور جو کتابیں تم سے پہلے (پیغمبروں پر) نازل ہوئیں سب پر ایمان لاتے اور آخرت کا یقین رکھتے ہیں');
INSERT INTO `ayats` VALUES(0012, 5, 'أُولَئِكَ عَلَى هُدًى مِنْ رَبِّهِمْ ۖ وَأُولَئِكَ هُمُ الْمُفْلِحُونَ', 002, 'یہی لوگ اپنے پروردگار (کی طرف) سے ہدایت پر ہیں اور یہی نجات پانے والے ہیں');
INSERT INTO `ayats` VALUES(0013, 6, 'إِنَّ الَّذِينَ كَفَرُوا سَوَاءٌ عَلَيْهِمْ أَأَنْذَرْتَهُمْ أَمْ لَمْ تُنْذِرْهُمْ لَا يُؤْمِنُونَ ', 002, 'جو لوگ کافر ہیں انہیں تم نصیحت کرو یا نہ کرو ان کے لیے برابر ہے۔ وہ ایمان نہیں لانے کے');
INSERT INTO `ayats` VALUES(0014, 7, 'خَتَمَ اللَّهُ عَلَى قُلُوبِهِمْ وَعَلَى سَمْعِهِمْ ۖ وَعَلَى أَبْصَارِهِمْ غِشَاوَةٌ ۖ وَلَهُمْ عَذَابٌ عَظِيمٌ', 002, 'خدا نے ان کے دلوں اور کانوں پر مہر لگا رکھی ہے اور ان کی آنکھوں پر پردہ (پڑا ہوا) ہے اور ان کے لیے بڑا عذاب (تیار) ہے');
INSERT INTO `ayats` VALUES(0015, 8, 'وَمِنَ النَّاسِ مَنْ يَقُولُ آمَنَّا بِاللَّهِ وَبِالْيَوْمِ الْآخِرِ وَمَا هُمْ بِمُؤْمِنِينَ', 002, 'اور بعض لوگ ایسے ہیں جو کہتے ہیں کہ ہم خدا پر اور روزِ آخرت پر ایمان رکھتے ہیں حالانکہ وہ ایمان نہیں رکھتے');
INSERT INTO `ayats` VALUES(0016, 9, 'يُخَادِعُونَ اللَّهَ وَالَّذِينَ آمَنُوا وَمَا يَخْدَعُونَ إِلَّا أَنْفُسَهُمْ وَمَا يَشْعُرُونَ', 002, 'یہ (اپنے پندار میں) خدا کو اور مومنوں کو چکما دیتے ہیں مگر (حقیقت میں) اپنے سوا کسی کو چکما نہیں دیتے اور اس سے بے خبر ہیں');
INSERT INTO `ayats` VALUES(0017, 10, 'فِي قُلُوبِهِمْ مَرَضٌ فَزَادَهُمُ اللَّهُ مَرَضًا ۖ وَلَهُمْ عَذَابٌ أَلِيمٌ بِمَا كَانُوا يَكْذِبُونَ', 002, 'ان کے دلوں میں (کفر کا) مرض تھا۔ خدا نے ان کا مرض اور زیادہ کر دیا اور ان کے جھوٹ بولنے کے سبب ان کو دکھ دینے والا عذاب ہوگا');
INSERT INTO `ayats` VALUES(0018, 11, 'وَإِذَا قِيلَ لَهُمْ لَا تُفْسِدُوا فِي الْأَرْضِ قَالُوا إِنَّمَا نَحْنُ مُصْلِحُونَ', 002, 'اور جب ان سے کہا جاتا ہے کہ زمین میں فساد نہ ڈالو تو کہتے ہیں، ہم تو اصلاح کرنے والے ہیں');
INSERT INTO `ayats` VALUES(0019, 12, 'أَلَا إِنَّهُمْ هُمُ الْمُفْسِدُونَ وَلَكِنْ لَا يَشْعُرُونَ', 002, 'دیکھو یہ بلاشبہ مفسد ہیں، لیکن خبر نہیں رکھتے');
INSERT INTO `ayats` VALUES(0020, 13, 'وَإِذَا قِيلَ لَهُمْ آمِنُوا كَمَا آمَنَ النَّاسُ قَالُوا أَنُؤْمِنُ كَمَا آمَنَ السُّفَهَاءُ ۗ أَلَا إِنَّهُمْ هُمُ السُّفَهَاءُ وَلَكِنْ لَا يَعْلَمُونَ', 002, 'اور جب ان سے کہا جاتا ہے کہ جس طرح اور لوگ ایمان لے آئے، تم بھی ایمان لے آؤ تو کہتے ہیں، بھلا جس طرح بےوقوف ایمان لے آئے ہیں اسی طرح ہم بھی ایمان لے آئیں؟ سن لو کہ یہی بےوقوف ہیں لیکن نہیں جانتے');
INSERT INTO `ayats` VALUES(0021, 14, 'وَإِذَا لَقُوا الَّذِينَ آمَنُوا قَالُوا آمَنَّا وَإِذَا خَلَوْا إِلَى شَيَاطِينِهِمْ قَالُوا إِنَّا مَعَكُمْ إِنَّمَا نَحْنُ مُسْتَهْزِئُونَ', 002, 'اور یہ لوگ جب مومنوں سے ملتے ہیں تو کہتے ہیں کہ ہم ایمان لے آئے ہیں، اور جب اپنے شیطانوں میں جاتے ہیں تو (ان سے) کہتے ہیں کہ ہم تمھارے ساتھ ہیں اور (پیروانِ محمدﷺ سے) تو ہم ہنسی کیا کرتے ہیں');
INSERT INTO `ayats` VALUES(0022, 15, 'اللَّهُ يَسْتَهْزِئُ بِهِمْ وَيَمُدُّهُمْ فِي طُغْيَانِهِمْ يَعْمَهُونَ', 002, 'ان (منافقوں) سے خدا ہنسی کرتا ہے اور انہیں مہلت دیئے جاتا ہے کہ شرارت وسرکشی میں پڑے بہک رہے ہیں');
INSERT INTO `ayats` VALUES(0023, 16, 'أُولَئِكَ الَّذِينَ اشْتَرَوُا الضَّلَالَةَ بِالْهُدَى فَمَا رَبِحَتْ تِجَارَتُهُمْ وَمَا كَانُوا مُهْتَدِينَ', 002, 'یہ وہ لوگ ہیں جنہوں نے ہدایت چھوڑ کر گمراہی خریدی، تو نہ تو ان کی تجارت ہی نے کچھ نفع دیا اور نہ وہ ہدایت یاب ہی ہوئے');
INSERT INTO `ayats` VALUES(0024, 17, 'مَثَلُهُمْ كَمَثَلِ الَّذِي اسْتَوْقَدَ نَارًا فَلَمَّا أَضَاءَتْ مَا حَوْلَهُ ذَهَبَ اللَّهُ بِنُورِهِمْ وَتَرَكَهُمْ فِي ظُلُمَاتٍ لَا يُبْصِرُونَ ', 002, 'ان کی مثال اس شخص کی سی ہے کہ جس نے (شبِ تاریک میں) آگ جلائی۔ جب آگ نے اس کے اردگرد کی چیزیں روشن کیں تو خدا نے ان کی روشنی زائل کر دی اور ان کو اندھیروں میں چھوڑ دیا کہ کچھ نہیں دیکھتے');
INSERT INTO `ayats` VALUES(0025, 18, 'صُمٌّ بُكْمٌ عُمْيٌ فَهُمْ لَا يَرْجِعُونَ ', 002, '(یہ) بہرے ہیں، گونگے ہیں، اندھے ہیں کہ (کسی طرح سیدھے رستے کی طرف) لوٹ ہی نہیں سکتے');
INSERT INTO `ayats` VALUES(0026, 19, 'أَوْ كَصَيِّبٍ مِنَ السَّمَاءِ فِيهِ ظُلُمَاتٌ وَرَعْدٌ وَبَرْقٌ يَجْعَلُونَ أَصَابِعَهُمْ فِي آذَانِهِمْ مِنَ الصَّوَاعِقِ حَذَرَ الْمَوْتِ ۚ وَاللَّهُ مُحِيطٌ بِالْكَافِرِينَ ', 002, 'یا ان کی مثال مینہ کی سی ہے کہ آسمان سے (برس رہا ہو اور) اس میں اندھیرے پر اندھیرا (چھا رہا) ہو اور (بادل) گرج (رہا) ہو اور بجلی (کوند رہی) ہو تو یہ کڑک سے (ڈر کر) موت کے خوف سے کانوں میں انگلیاں دے لیں اور الله کافروں کو (ہر طرف سے) گھیرے ہوئے ہے');
INSERT INTO `ayats` VALUES(0027, 20, 'يَكَادُ الْبَرْقُ يَخْطَفُ أَبْصَارَهُمْ ۖ كُلَّمَا أَضَاءَ لَهُمْ مَشَوْا فِيهِ وَإِذَا أَظْلَمَ عَلَيْهِمْ قَامُوا ۚ وَلَوْ شَاءَ اللَّهُ لَذَهَبَ بِسَمْعِهِمْ وَأَبْصَارِهِمْ ۚ إِنَّ اللَّهَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ', 002, 'قریب ہے کہ بجلی (کی چمک) ان کی آنکھوں (کی بصارت) کو اچک لے جائے۔ جب بجلی (چمکتی اور) ان پر روشنی ڈالی ہے تو اس میں چل پڑتے ہیں اور جب اندھیرا ہو جاتا ہے تو کھڑے کے کھڑے رہ جاتے ہیں اور اگر الله چاہتا تو ان کے کانوں (کی شنوائی) اور آنکھوں (کی بینائی دونوں) کو زائل کر دیتا ہے۔ بے شک الله ہر چیز پر قادر ہے');
INSERT INTO `ayats` VALUES(0028, 21, 'يَا أَيُّهَا النَّاسُ اعْبُدُوا رَبَّكُمُ الَّذِي خَلَقَكُمْ وَالَّذِينَ مِنْ قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ', 002, 'لوگو! اپنے پروردگار کی عبات کرو جس نے تم کو اور تم سے پہلے لوگوں کو پیدا کیا تاکہ تم (اس کے عذاب سے) بچو ');
INSERT INTO `ayats` VALUES(0029, 22, 'الَّذِي جَعَلَ لَكُمُ الْأَرْضَ فِرَاشًا وَالسَّمَاءَ بِنَاءً وَأَنْزَلَ مِنَ السَّمَاءِ مَاءً فَأَخْرَجَ بِهِ مِنَ الثَّمَرَاتِ رِزْقًا لَكُمْ ۖ فَلَا تَجْعَلُوا لِلَّهِ أَنْدَادًا وَأَنْتُمْ تَعْلَمُونَ', 002, 'جس نے تمھارے لیے زمین کو بچھونا اور آسمان کو چھت بنایا اور آسمان سے مینہ برسا کر تمہارے کھانے کے لیے انواع و اقسام کے میوے پیدا کئے۔ پس کسی کو خدا کا ہمسر نہ بناؤ۔ اور تم جانتے تو ہو');
INSERT INTO `ayats` VALUES(0030, 23, 'وَإِنْ كُنْتُمْ فِي رَيْبٍ مِمَّا نَزَّلْنَا عَلَى عَبْدِنَا فَأْتُوا بِسُورَةٍ مِنْ مِثْلِهِ وَادْعُوا شُهَدَاءَكُمْ مِنْ دُونِ اللَّهِ إِنْ كُنْتُمْ صَادِقِينَ', 002, 'اور اگر تم کو اس (کتاب) میں، جو ہم نے اپنے بندے (محمدﷺ عربی) پر نازل فرمائی ہے کچھ شک ہو تو اسی طرح کی ایک سورت تم بھی بنا لاؤ اور خدا کے سوا جو تمہارے مددگار ہوں ان کو بھی بلالو اگر تم سچے ہو ');
INSERT INTO `ayats` VALUES(0031, 24, 'فَإِنْ لَمْ تَفْعَلُوا وَلَنْ تَفْعَلُوا فَاتَّقُوا النَّارَ الَّتِي وَقُودُهَا النَّاسُ وَالْحِجَارَةُ ۖ أُعِدَّتْ لِلْكَافِرِينَ ', 002, 'لیکن اگر (ایسا) نہ کر سکو اور ہرگز نہیں کر سکو گے تو اس آگ سے ڈرو جس کا ایندھن آدمی اور پتھر ہوں گے (اور جو) کافروں کے لیے تیار کی گئی ہے');
INSERT INTO `ayats` VALUES(0032, 25, 'وَبَشِّرِ الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ أَنَّ لَهُمْ جَنَّاتٍ تَجْرِي مِنْ تَحْتِهَا الْأَنْهَارُ ۖ كُلَّمَا رُزِقُوا مِنْهَا مِنْ ثَمَرَةٍ رِزْقًا ۙ قَالُوا هَذَا الَّذِي رُزِقْنَا مِنْ قَبْلُ ۖ وَأُتُوا بِهِ مُتَشَابِهًا ۖ وَلَهُمْ فِيهَا أَزْوَاجٌ مُطَهَّرَةٌ ۖ وَهُمْ فِيهَا خَالِدُونَ', 002, 'اور جو لوگ ایمان لائے اور نیک عمل کرتے رہے، ان کو خوشخبری سنا دو کہ ان کے لیے (نعمت کے) باغ ہیں، جن کے نیچے نہریں بہہ رہی ہیں۔ جب انہیں ان میں سے کسی قسم کا میوہ کھانے کو دیا جائے گا تو کہیں گے، یہ تو وہی ہے جو ہم کو پہلے دیا گیا تھا۔ اور ان کو ایک دوسرے کے ہم شکل میوے دیئے جائیں گے اور وہاں ان کے لیے پاک بیویاں ہوں گی اور وہ بہشتوں میں ہمیشہ رہیں گے ');
INSERT INTO `ayats` VALUES(0033, 26, 'إِنَّ اللَّهَ لَا يَسْتَحْيِي أَنْ يَضْرِبَ مَثَلًا مَا بَعُوضَةً فَمَا فَوْقَهَا ۚ فَأَمَّا الَّذِينَ آمَنُوا فَيَعْلَمُونَ أَنَّهُ الْحَقُّ مِنْ رَبِّهِمْ ۖ وَأَمَّا الَّذِينَ كَفَرُوا فَيَقُولُونَ مَاذَا أَرَادَ اللَّهُ بِهَذَا مَثَلًا ۘ يُضِلُّ بِهِ كَثِيرًا وَيَهْدِي بِهِ كَثِيرًا ۚ وَمَا يُضِلُّ بِهِ إِلَّا الْفَاسِقِينَ', 002, 'الله اس بات سے عار نہیں کرتا کہ مچھر یا اس سے بڑھ کر کسی چیز (مثلاً مکھی مکڑی وغیرہ) کی مثال بیان فرمائے۔ جو مومن ہیں، وہ یقین کرتے ہیں وہ ان کے پروردگار کی طرف سے سچ ہے اور جو کافر ہیں وہ کہتے ہیں کہ اس مثال سے خدا کی مراد ہی کیا ہے۔ اس سے (خدا) بہتوں کو گمراہ کرتا ہے اور بہتوں کو ہدایت بخشتا ہے اور گمراہ بھی کرتا تو نافرمانوں ہی کو');
INSERT INTO `ayats` VALUES(0034, 27, 'الَّذِينَ يَنْقُضُونَ عَهْدَ اللَّهِ مِنْ بَعْدِ مِيثَاقِهِ وَيَقْطَعُونَ مَا أَمَرَ اللَّهُ بِهِ أَنْ يُوصَلَ وَيُفْسِدُونَ فِي الْأَرْضِ ۚ أُولَئِكَ هُمُ الْخَاسِرُونَ', 002, 'جو خدا کے اقرار کو مضبوط کرنے کے بعد توڑ دیتے ہیں اور جس چیز (یعنی رشتہٴ قرابت) کے جوڑے رکھنے کا الله نے حکم دیا ہے اس کو قطع کئے ڈالتے ہیں اور زمین میں خرابی کرتے ہیں یہی لوگ نقصان اٹھانے والے ہیں');
INSERT INTO `ayats` VALUES(0035, 28, 'كَيْفَ تَكْفُرُونَ بِاللَّهِ وَكُنْتُمْ أَمْوَاتًا فَأَحْيَاكُمْ ۖ ثُمَّ يُمِيتُكُمْ ثُمَّ يُحْيِيكُمْ ثُمَّ إِلَيْهِ تُرْجَعُونَ', 002, '(کافرو!) تم خدا سے کیوں کر منکر ہو سکتے ہو جس حال میں کہ تم بےجان تھے تو اس نے تم کو جان بخشی پھر وہی تم کو مارتا ہے پھر وہی تم کو زندہ کرے گا پھر تم اسی کی طرف لوٹ کر جاؤ گے');
INSERT INTO `ayats` VALUES(0036, 29, 'هُوَ الَّذِي خَلَقَ لَكُمْ مَا فِي الْأَرْضِ جَمِيعًا ثُمَّ اسْتَوَى إِلَى السَّمَاءِ فَسَوَّاهُنَّ سَبْعَ سَمَاوَاتٍ ۚ وَهُوَ بِكُلِّ شَيْءٍ عَلِيمٌ', 002, 'وہی تو ہے جس نے سب چیزیں جو زمین میں ہیں تمہارے لیے پیدا کیں پھر آسمان کی طرف متوجہ ہوا تو ان کو ٹھیک سات آسمان بنا دیا اور وہ ہر چیز سے خبردار ہے');
INSERT INTO `ayats` VALUES(0037, 30, 'وَإِذْ قَالَ رَبُّكَ لِلْمَلَائِكَةِ إِنِّي جَاعِلٌ فِي الْأَرْضِ خَلِيفَةً ۖ قَالُوا أَتَجْعَلُ فِيهَا مَنْ يُفْسِدُ فِيهَا وَيَسْفِكُ الدِّمَاءَ وَنَحْنُ نُسَبِّحُ بِحَمْدِكَ وَنُقَدِّسُ لَكَ ۖ قَالَ إِنِّي أَعْلَمُ مَا لَا تَعْلَمُونَ', 002, 'اور (وہ وقت یاد کرنے کے قابل ہے) جب تمہارے پروردگار نے فرشتوں سے فرمایا کہ میں زمین میں (اپنا) نائب بنانے والا ہوں۔ انہوں نے کہا۔ کیا تُو اس میں ایسے شخص کو نائب بنانا چاہتا ہے جو خرابیاں کرے اور کشت وخون کرتا پھرے اور ہم تیری تعریف کے ساتھ تسبیح وتقدیس کرتے رہتے ہیں۔ (خدا نے) فرمایا میں وہ باتیں جانتا ہوں جو تم نہیں جانتے');
INSERT INTO `ayats` VALUES(0038, 31, 'وَعَلَّمَ آدَمَ الْأَسْمَاءَ كُلَّهَا ثُمَّ عَرَضَهُمْ عَلَى الْمَلَائِكَةِ فَقَالَ أَنْبِئُونِي بِأَسْمَاءِ هَؤُلَاءِ إِنْ كُنْتُمْ صَادِقِينَ', 002, 'اور اس نے آدم کو سب (چیزوں کے) نام سکھائے پھر ان کو فرشتوں کے سامنے کیا اور فرمایا کہ اگر تم سچے ہو تو مجھے ان کے نام بتاؤ');
INSERT INTO `ayats` VALUES(0039, 32, 'قَالُوا سُبْحَانَكَ لَا عِلْمَ لَنَا إِلَّا مَا عَلَّمْتَنَا ۖ إِنَّكَ أَنْتَ الْعَلِيمُ الْحَكِيمُ', 002, 'انہوں نے کہا، تو پاک ہے۔ جتنا علم تو نے ہمیں بخشا ہے، اس کے سوا ہمیں کچھ معلوم نہیں۔ بے شک تو دانا (اور) حکمت والا ہے');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chap_id` int(5) unsigned zerofill NOT NULL auto_increment,
  `chap_no` int(2) unsigned zerofill default NULL,
  `chap_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `subject_id` int(4) unsigned zerofill NOT NULL default '0042',
  PRIMARY KEY  (`chap_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=124 ;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` VALUES(00072, 02, 'Software Basics', 0014);
INSERT INTO `chapters` VALUES(00002, 01, 'کمپیوٹر کا تعارف', 0006);
INSERT INTO `chapters` VALUES(00003, 01, 'Introduction to Mechanics', 0011);
INSERT INTO `chapters` VALUES(00004, 01, 'رسول اللہ صلی اللہ علیہ وسلم کے اخلاق', 0012);
INSERT INTO `chapters` VALUES(00005, 02, 'امید کی خوشی', 0012);
INSERT INTO `chapters` VALUES(00006, 03, 'ایک خادِم خلق کی کہانی', 0012);
INSERT INTO `chapters` VALUES(00007, 04, 'مرزا غالِب کے عادات و خصائل', 0012);
INSERT INTO `chapters` VALUES(00008, 05, 'آرام و سکون', 0012);
INSERT INTO `chapters` VALUES(00009, 06, 'نام دیو ۔ مالی', 0012);
INSERT INTO `chapters` VALUES(00010, 07, 'سفارش طلب', 0012);
INSERT INTO `chapters` VALUES(00011, 08, 'سائنس اور مذہب کے فاصلے', 0012);
INSERT INTO `chapters` VALUES(00012, 09, 'سویرے جو کل آنکھ میری کھلی', 0012);
INSERT INTO `chapters` VALUES(00013, 10, 'ٹوکیو کی سیر', 0012);
INSERT INTO `chapters` VALUES(00014, 11, 'یتیم شہزادے کی ٹھوکریں', 0012);
INSERT INTO `chapters` VALUES(00015, 12, 'پروفیسر مرزا محمد سعید', 0012);
INSERT INTO `chapters` VALUES(00016, 13, 'بڑے بھائی صاحب', 0012);
INSERT INTO `chapters` VALUES(00017, 14, 'سند باد جہازی', 0012);
INSERT INTO `chapters` VALUES(00018, 15, 'مکتوبات', 0012);
INSERT INTO `chapters` VALUES(00019, 16, 'رب العالمین', 0012);
INSERT INTO `chapters` VALUES(00020, 17, 'نعت', 0012);
INSERT INTO `chapters` VALUES(00021, 18, 'برسات', 0012);
INSERT INTO `chapters` VALUES(00022, 19, 'حضرت ام عمارہ', 0012);
INSERT INTO `chapters` VALUES(00023, 20, 'تعمیر چمن', 0012);
INSERT INTO `chapters` VALUES(00024, 21, 'خدا دیکھ رہا ہے', 0012);
INSERT INTO `chapters` VALUES(00025, 22, 'خواب کی تعبیر', 0012);
INSERT INTO `chapters` VALUES(00026, 23, 'کھڑا ڈنر', 0012);
INSERT INTO `chapters` VALUES(00027, 24, 'وصال', 0012);
INSERT INTO `chapters` VALUES(00028, 25, 'میر دریا ہے سنے شعر زبانی اس کی', 0012);
INSERT INTO `chapters` VALUES(00029, 26, 'لگتا نہیں ہے دِل مرا اُجڑے دیار میں', 0012);
INSERT INTO `chapters` VALUES(00030, 27, 'ہر حال میں رہا جو تِرا آسرا مجھے', 0012);
INSERT INTO `chapters` VALUES(00031, 28, 'ہم کو متا سکے، یہ زمانے میں دم نہیں', 0012);
INSERT INTO `chapters` VALUES(00032, 29, 'یہ فخر تو حاصل ہے، بُرے ہیں کہ بھلے ہیں', 0012);
INSERT INTO `chapters` VALUES(00071, 01, 'Hardware Basics', 0014);
INSERT INTO `chapters` VALUES(00034, 01, 'فزکس ۔ ایک تعارف', 0007);
INSERT INTO `chapters` VALUES(00035, 02, 'پیمائش', 0007);
INSERT INTO `chapters` VALUES(00039, 03, 'کائنی میٹکس', 0007);
INSERT INTO `chapters` VALUES(00040, 04, 'موشن اینڈ فورس', 0007);
INSERT INTO `chapters` VALUES(00041, 05, 'ویکٹرز', 0007);
INSERT INTO `chapters` VALUES(00042, 06, 'ایکوی لبریم', 0007);
INSERT INTO `chapters` VALUES(00043, 07, 'سرکلر موشن اینڈ گریوی ٹیشن', 0007);
INSERT INTO `chapters` VALUES(00044, 08, 'ورک، پاور اینڈ انرجی', 0007);
INSERT INTO `chapters` VALUES(00045, 09, 'سادہ مشینیں', 0007);
INSERT INTO `chapters` VALUES(00046, 10, 'مادہ کی خصوصیات', 0007);
INSERT INTO `chapters` VALUES(00047, 11, 'حرارت', 0007);
INSERT INTO `chapters` VALUES(00048, 02, 'کمپیوٹر کے اجزاء ', 0006);
INSERT INTO `chapters` VALUES(00049, 03, 'ان پُٹ / آؤٹ پُٹ کے آلات', 0006);
INSERT INTO `chapters` VALUES(00050, 04, 'ذخیرہ کرنے کے آلات', 0006);
INSERT INTO `chapters` VALUES(00051, 05, 'عددی نظام', 0006);
INSERT INTO `chapters` VALUES(00052, 06, 'بولین الجبرا', 0006);
INSERT INTO `chapters` VALUES(00053, 07, 'کمپیوٹر سافٹ ویئر', 0006);
INSERT INTO `chapters` VALUES(00054, 08, 'ونڈو کا تعارف', 0006);
INSERT INTO `chapters` VALUES(00055, 12, 'Electrostatics', 0013);
INSERT INTO `chapters` VALUES(00056, 13, 'Current Electricity', 0013);
INSERT INTO `chapters` VALUES(00057, 14, 'Electromagnetism', 0013);
INSERT INTO `chapters` VALUES(00058, 15, 'Electromagnetic Induction', 0013);
INSERT INTO `chapters` VALUES(00059, 16, 'Alternating Current', 0013);
INSERT INTO `chapters` VALUES(00060, 17, 'Physics of Solids', 0013);
INSERT INTO `chapters` VALUES(00061, 18, 'Electronics', 0013);
INSERT INTO `chapters` VALUES(00062, 19, 'Dawn of Modern Physics', 0013);
INSERT INTO `chapters` VALUES(00063, 20, 'Atomic Spectra', 0013);
INSERT INTO `chapters` VALUES(00064, 21, 'Nuclear Physics', 0013);
INSERT INTO `chapters` VALUES(00065, NULL, 'Chapter 1 to 5', 0008);
INSERT INTO `chapters` VALUES(00067, 01, 'Introduction to computers', 0001);
INSERT INTO `chapters` VALUES(00068, 02, 'Introduction to windows', 0001);
INSERT INTO `chapters` VALUES(00069, 03, 'Commonly used software', 0001);
INSERT INTO `chapters` VALUES(00070, 04, 'The internet and world wide web', 0001);
INSERT INTO `chapters` VALUES(00073, 03, 'Customizing Word Document', 0014);
INSERT INTO `chapters` VALUES(00074, 04, 'Multimedia Presentations', 0014);
INSERT INTO `chapters` VALUES(00075, 05, 'Electronic Mail', 0014);
INSERT INTO `chapters` VALUES(00076, 12, 'ویو موشن', 0015);
INSERT INTO `chapters` VALUES(00077, 13, 'آواز', 0015);
INSERT INTO `chapters` VALUES(00078, 14, 'سفیریکل مررز اور لینزز', 0015);
INSERT INTO `chapters` VALUES(00079, 15, 'الیکٹروسٹیٹکس', 0015);
INSERT INTO `chapters` VALUES(00080, 16, 'کرنٹ الیکٹریسٹی', 0015);
INSERT INTO `chapters` VALUES(00081, 17, 'الیکٹرومیگنیٹزم', 0015);
INSERT INTO `chapters` VALUES(00082, 18, 'نیوکلیئر فزکس ', 0015);
INSERT INTO `chapters` VALUES(00083, 19, 'الیکٹرونکس', 0015);
INSERT INTO `chapters` VALUES(00084, 20, '', 0015);
INSERT INTO `chapters` VALUES(00085, 01, 'مسائل حل کرنا', 0016);
INSERT INTO `chapters` VALUES(00086, 02, 'ڈیٹا ٹائپس، اسائنمنٹ اور ان پُٹ آؤٹ پُٹ سٹیٹمنٹس', 0016);
INSERT INTO `chapters` VALUES(00087, 03, 'کنٹرول سٹرکچرز', 0016);
INSERT INTO `chapters` VALUES(00088, 04, 'ایریز', 0016);
INSERT INTO `chapters` VALUES(00089, 05, 'سب پروگرامز اور فائل ہینڈلنگ', 0016);
INSERT INTO `chapters` VALUES(00090, 06, 'بیسک میں گرافکس', 0016);
INSERT INTO `chapters` VALUES(00091, 07, 'مائیکروسافٹ ورڈ', 0016);
INSERT INTO `chapters` VALUES(00092, 01, 'Networks and Communications', 0017);
INSERT INTO `chapters` VALUES(00093, 02, 'Computer Scurity Threats', 0017);
INSERT INTO `chapters` VALUES(00094, 03, 'Spreadsheets in Excel', 0017);
INSERT INTO `chapters` VALUES(00095, 04, 'Problem-Solving', 0017);
INSERT INTO `chapters` VALUES(00096, 05, 'Computer Programming', 0017);
INSERT INTO `chapters` VALUES(00097, 00, 'All in one', 0018);
INSERT INTO `chapters` VALUES(00098, 01, 'Classification of living things', 0041);
INSERT INTO `chapters` VALUES(00099, 02, 'Plant Kingdom', 0041);
INSERT INTO `chapters` VALUES(00100, 03, 'Animal Kingdom', 0041);
INSERT INTO `chapters` VALUES(00101, 04, 'Environment', 0041);
INSERT INTO `chapters` VALUES(00102, 05, 'Continuity of Life', 0041);
INSERT INTO `chapters` VALUES(00103, 06, 'Symbols and Formulae', 0041);
INSERT INTO `chapters` VALUES(00104, 07, 'Chemical charge and Chemical bonds', 0041);
INSERT INTO `chapters` VALUES(00105, 08, 'Acids, Bases and Salts', 0041);
INSERT INTO `chapters` VALUES(00106, 09, 'Carbon and its compounds', 0041);
INSERT INTO `chapters` VALUES(00107, 10, 'Manufacture of useful products from common raw materials', 0041);
INSERT INTO `chapters` VALUES(00108, 11, 'Lquid Pressure', 0041);
INSERT INTO `chapters` VALUES(00109, 12, 'Thermal Expansion', 0041);
INSERT INTO `chapters` VALUES(00110, 13, 'Light', 0041);
INSERT INTO `chapters` VALUES(00111, 14, 'Electricity and Magnetism', 0041);
INSERT INTO `chapters` VALUES(00112, 15, 'Rocks', 0041);
INSERT INTO `chapters` VALUES(00113, 16, 'Galaxies and Stars', 0041);
INSERT INTO `chapters` VALUES(00114, 01, 'Basics of Information Technology', 0042);
INSERT INTO `chapters` VALUES(00115, 02, 'Information Networks', 0042);
INSERT INTO `chapters` VALUES(00116, 03, 'Data Communication', 0042);
INSERT INTO `chapters` VALUES(00117, 04, 'Applications and Uses of Computer', 0042);
INSERT INTO `chapters` VALUES(00118, 05, 'Computer Architecture', 0042);
INSERT INTO `chapters` VALUES(00119, 06, 'Security, Copyright and the Law', 0042);
INSERT INTO `chapters` VALUES(00120, 07, 'Windows Operating System', 0042);
INSERT INTO `chapters` VALUES(00121, 08, 'Word Processing', 0042);
INSERT INTO `chapters` VALUES(00122, 09, 'Spreadsheet Software', 0042);
INSERT INTO `chapters` VALUES(00123, 10, 'Fundamentals of the Internet', 0042);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `__id` int(4) NOT NULL auto_increment,
  `sesId` varchar(128) NOT NULL,
  `user` varchar(64) NOT NULL,
  `room_name` varchar(128) NOT NULL default 'Main Room',
  `__login` datetime NOT NULL default '0000-00-00 00:00:00',
  `__logout` datetime NOT NULL default '0000-00-00 00:00:00',
  `ip` varchar(15) NOT NULL default '000.000.000.000',
  PRIMARY KEY  (`__id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` VALUES(1, 'qeo3vu45suim5raj2h7iavhq07', 'Main', '', '2011-04-29 15:36:07', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(2, 'qeo3vu45suim5raj2h7iavhq07', 'Ejaz', 'goof', '2011-04-29 15:44:44', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(3, 'qeo3vu45suim5raj2h7iavhq07', 'fejaz', 'Main Room', '2011-04-29 15:52:31', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(4, 'qeo3vu45suim5raj2h7iavhq07', 'Ejazz', '', '2011-04-29 16:13:09', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(5, 'qeo3vu45suim5raj2h7iavhq07', 'fEjazz', 'Main Room', '2011-04-29 16:14:31', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(8, 'qeo3vu45suim5raj2h7iavhq07', 'asd', '', '2011-04-29 16:25:48', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(9, 'cvnjqimstb4kql2o58moru11g2', 'asz', 'pai', '2011-04-29 16:35:31', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(10, 'qeo3vu45suim5raj2h7iavhq07', '<<<<main bh hoon>>>>', 'ejaz', '2011-04-29 16:41:40', '0000-00-00 00:00:00', '127.0.0.1');
INSERT INTO `chat` VALUES(11, '0fbae41e55917e2e3ae17fdc80db79e8', 'free', '', '2011-06-01 08:13:20', '0000-00-00 00:00:00', '111.88.53.135');
INSERT INTO `chat` VALUES(12, '0fbae41e55917e2e3ae17fdc80db79e8', 'dsa', 'new', '2011-06-01 08:15:23', '0000-00-00 00:00:00', '111.88.53.135');
INSERT INTO `chat` VALUES(13, '0fbae41e55917e2e3ae17fdc80db79e8', 'dghf', 'pai', '2011-06-01 08:24:35', '0000-00-00 00:00:00', '111.88.53.135');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(2) unsigned zerofill NOT NULL auto_increment,
  `class_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `class_enabled` varchar(1) collate utf8_unicode_ci NOT NULL default 'n',
  PRIMARY KEY  (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` VALUES(06, '06th', 'y');
INSERT INTO `classes` VALUES(07, '07th', 'y');
INSERT INTO `classes` VALUES(08, '08th', 'y');
INSERT INTO `classes` VALUES(09, '09th', 'y');
INSERT INTO `classes` VALUES(10, '10th', 'y');
INSERT INTO `classes` VALUES(11, '11th', 'y');
INSERT INTO `classes` VALUES(12, '12th', 'y');
INSERT INTO `classes` VALUES(13, '3rd Year', 'n');
INSERT INTO `classes` VALUES(14, '4th Year', 'n');
INSERT INTO `classes` VALUES(15, 'MCS', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `paras`
--

CREATE TABLE `paras` (
  `para_id` tinyint(2) unsigned zerofill NOT NULL COMMENT 'para nmbr',
  `para_name` varchar(100) character set utf8 NOT NULL COMMENT 'para name',
  PRIMARY KEY  (`para_id`,`para_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paras`
--

INSERT INTO `paras` VALUES(01, 'الم');
INSERT INTO `paras` VALUES(02, 'سَيَقُولُ');
INSERT INTO `paras` VALUES(03, 'تِلْكَ الرُّسُلُ');
INSERT INTO `paras` VALUES(04, 'لَنْ تَنَالُوا الْبِرَّ');
INSERT INTO `paras` VALUES(05, 'وَالْمُحْصَنَاتُ');
INSERT INTO `paras` VALUES(06, 'لَا يُحِبُّ اللَّهُ');
INSERT INTO `paras` VALUES(07, 'وَإِذَا سَمِعُوا');
INSERT INTO `paras` VALUES(08, 'وَلَوْ أَنَّنَا ');
INSERT INTO `paras` VALUES(09, 'قَالَ الْمَلَأُ');
INSERT INTO `paras` VALUES(10, 'وَاعْلَمُوا ');
INSERT INTO `paras` VALUES(11, 'يَعْتَذِرُونَ');
INSERT INTO `paras` VALUES(12, 'وَمَا مِنْ دَابَّةٍ');
INSERT INTO `paras` VALUES(13, 'وَمَا أُبَرِّئُ');
INSERT INTO `paras` VALUES(14, 'رُبَمَا');
INSERT INTO `paras` VALUES(15, 'سُبْحَانَ الَّذِي');
INSERT INTO `paras` VALUES(16, 'قَالَ أَلَم');
INSERT INTO `paras` VALUES(17, 'اِقْتَرَب');
INSERT INTO `paras` VALUES(18, 'قَدْ أَفْلَحَ ');
INSERT INTO `paras` VALUES(19, 'وَقَالَ الَّذِين');
INSERT INTO `paras` VALUES(20, 'أَمَّنْ خَلَقَ');
INSERT INTO `paras` VALUES(21, 'اتْلُ مَا أُوحِيَ');
INSERT INTO `paras` VALUES(22, 'وَمَنْ يَقْنُتْ');
INSERT INTO `paras` VALUES(23, 'وَمَا لِيَ ');
INSERT INTO `paras` VALUES(24, 'فَمَنْ أَظْلَمُ');
INSERT INTO `paras` VALUES(25, 'إِلَيْهِ يُرَدُّ');
INSERT INTO `paras` VALUES(26, 'حٰم');
INSERT INTO `paras` VALUES(27, 'قَالَ فَمَا خَطْبُكُمْ');
INSERT INTO `paras` VALUES(28, 'قَدْ سَمِعَ اللَّهُ');
INSERT INTO `paras` VALUES(29, 'تَبَارَكَ الَّذِي');
INSERT INTO `paras` VALUES(30, 'عَمَّ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL auto_increment,
  `guessed` varchar(1) collate utf8_unicode_ci NOT NULL default 'n',
  `question` text collate utf8_unicode_ci,
  `qtype` varchar(3) collate utf8_unicode_ci NOT NULL default 'sq' COMMENT 'question type: mcq for multiple choice question , sq for short question and lq for long question',
  `ranswer` varchar(500) collate utf8_unicode_ci default NULL,
  `wanswer1` varchar(255) collate utf8_unicode_ci default NULL,
  `wanswer2` varchar(255) collate utf8_unicode_ci default NULL,
  `wanswer3` varchar(255) collate utf8_unicode_ci default NULL,
  `secondlast` varchar(255) collate utf8_unicode_ci NOT NULL default '##',
  `lastoption` varchar(255) collate utf8_unicode_ci NOT NULL default '##' COMMENT 'it stores the last option of the mcq',
  `qnumber` int(11) default NULL,
  `chap_id` int(5) unsigned zerofill NOT NULL default '00114',
  `qnfb` int(2) NOT NULL default '0' COMMENT 'question number from book',
  PRIMARY KEY  (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2757 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(1, 'n', 'Two by Two equals ', 'mcq', '4', '5', '3', '6', '##', '##', 1, 00001, 0);
INSERT INTO `questions` VALUES(2, 'n', 'Three by Two equals ', 'mcq', '6', '5', '3', '9', '##', '##', 2, 00001, 0);
INSERT INTO `questions` VALUES(3, 'n', 'Two by Four equals ', 'mcq', '8', '1', '3', '6', '##', '##', 3, 00001, 0);
INSERT INTO `questions` VALUES(4, 'n', 'Two by Five equals ', 'mcq', '10', '3', '9', '6', '##', '##', 4, 00001, 0);
INSERT INTO `questions` VALUES(5, 'n', 'Two by six equals ', 'mcq', '12', '15', '13', '16', '##', '##', 5, 00001, 0);
INSERT INTO `questions` VALUES(6, 'n', 'Two by seven equals ', 'mcq', '14', '11', '9', '17', '##', '##', 6, 00001, 0);
INSERT INTO `questions` VALUES(7, 'n', 'Two by eight equals ', 'mcq', '16', '12', '13', '19', '##', '##', 7, 00001, 0);
INSERT INTO `questions` VALUES(8, 'n', 'Two by nine equals ', 'mcq', '18', '15', '13', '22', '##', '##', 8, 00001, 0);
INSERT INTO `questions` VALUES(9, 'n', 'Three by Three equals ', 'mcq', '9', '15', '8', '6', '##', '##', 9, 00001, 0);
INSERT INTO `questions` VALUES(10, 'n', 'Four by Three equals ', 'mcq', '12', '14', '17', '15', '##', '##', 10, 00001, 0);
INSERT INTO `questions` VALUES(11, 'n', 'بنیادی مقدار سے کیا مراد ہے؟ پانچ مثالیں دیں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00007, 0);
INSERT INTO `questions` VALUES(12, 'n', 'بنیادی مقدار سے کیا مراد ہے؟ پانچ مثالیں دیں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00007, 0);
INSERT INTO `questions` VALUES(13, 'n', 'کمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(14, 'n', 'ابیکس سے کیا مراد  ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(15, 'n', 'جان نیپئر کون تھا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(16, 'n', 'پاسکل کون تھا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(17, 'n', 'وان لیبنیز کون تھا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(18, 'n', 'چارلس بابیج نے کیا کام سرانجام دیا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(19, 'n', 'پنچ کارڈ کا استعمال کیا تھا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(20, 'n', 'پہلا الیکٹرونک ڈیجیٹل کمپیوٹر کیسے بنا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(21, 'n', 'جدید سٹورڈ پروگرام کا تصورکیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(22, 'n', 'کمپیوٹر میں <span dir=''rtl''>VLSI</span> کی کیا اہمیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(23, 'n', ' کمپیوٹر کی پہلی جنریشن پر مختصر نوٹ لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(24, 'n', '<span dir=''rtl''>ENIAC</span> کے متعلق آپ کیا جانتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(25, 'n', '<span dir=''rtl''>UNIVAC </span>کے متعلق آپ کیا جانتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(26, 'n', 'کمپیوٹر کی دوسری  جنریشن پر مختصر نوٹ لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(27, 'n', 'ٹرانزسٹر کے چند اہم فوائد لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(28, 'n', 'کمپیوٹر کی تیسری  جنریشن پر مختصر نوٹ لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(29, 'n', 'کمپیوٹر کی چوتھی  جنریشن پر مختصر نوٹ لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(30, 'n', 'مائیکروپراسیسر نے کمپیوٹر کو کیسے متاثر کیا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(31, 'n', ' کمپیوٹر کی پانچویں  جنریشن پر مختصر نوٹ لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(32, 'n', 'اینالوگ کمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(33, 'n', 'ڈیجیٹل کمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(34, 'n', ' اینالاگ اور ڈیجیٹل کمپیوٹر میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(35, 'n', 'ہائی برڈ کمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(36, 'n', 'سب سے ذیادہ طاقتور کمپیوٹر کے بارے میں آپ کیا جانتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(37, 'n', 'مین فریم کمپیوٹر پر مختصر نوٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(38, 'n', 'مِنی کمپیوٹر پر مختصر نوٹ لکھیں۔ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(39, 'n', 'مِنی کمپیوٹر کی چند اہم خوبیاں لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(40, 'n', 'مائیکروکمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(41, 'n', 'پاکٹ کمپیوٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(42, 'n', 'لیپ ٹاپ کمپیوٹر کا استعمال کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(43, 'n', 'ڈیسک ٹاپ کمپیوٹر پر نوٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(44, 'n', '  بینکنگ کے شعبہ میں کمپیوٹر کی کیا اہمیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(45, 'n', 'فروخت کے شعبہ میں کمپیوٹر کی کیا اہمیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(46, 'n', 'پروگرام کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(47, 'n', 'پروگرامنگ لینگویج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(48, 'n', 'اونچے درجے کی پروگرامنگ لینگویج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(49, 'n', 'پانچ اونچے درجے کی لینگویج کے نام لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(50, 'n', 'نچلے درجے کی پروگرامنگ لینگویج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(51, 'n', ' لینگویج ٹرانسلیٹر کیوں استعمال کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(52, 'n', ' مختلف لینگویج ٹرانسلیٹر کون کون سے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(53, 'n', ' اونچےاور نچلے درجے کی پروگرامنگ لینگویج میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(54, 'n', 'معاشرے پر کمپیوٹر اور انٹرنیٹ کے تین مثبت اثرات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(55, 'n', 'معاشرے پر کمپیوٹر اور انٹرنیٹ کے تین منفی اثرات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(56, 'n', ' نیوٹن کا موشن کا پہلا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(57, 'n', ' نیوٹن کا موشن کا دوسرا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(58, 'n', ' نیوٹن کا موشن کا تیسرا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(59, 'n', ' موشن کا پہلا قانون انرشیا کا قانون بھی کہلاتا ہے، وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(60, 'n', 'ماس کسی جسم کے انرشیا کی پیمائش ہے، وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(61, 'n', 'ماس اور وزن میں کوئی سے تین فرق بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(62, 'n', 'کسی جسم کا وزن ہر جگہ یونیفارم نہیں رہتا، وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(63, 'n', 'ڈوری میں ٹینشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(64, 'n', 'مومینٹم سے کیا مراد ہے؟ اسکا ایس آئی یونٹ لکھیں ۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(65, 'n', '<span dir=''rtl''>ثابت کریں کہ  Ns = kgms<sup>-1</sup>  </span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(66, 'n', ' قانون بقائے مومینٹم بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(67, 'n', 'فرکشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(68, 'n', 'سٹیٹک فرکشن اور انتہائی فرکشن میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(69, 'n', 'فرکشن کم کرنے کے کوئی سے دو طریقے بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(70, 'n', 'دو سطحوں کے درمیان فرکشن کیوںکر پیدا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(71, 'n', 'رولنگ فرکشن سے کیا مراد ہے؟ یہ سلائڈنگ فرکشن سے کم کیوں ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(72, 'n', 'کسی جسم کے مومینٹم کا انحصار کن عوامل پر ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(73, 'n', 'فرکشن کے چند فوائد بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(74, 'n', 'فرکشن کے چند نقصانات بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(75, 'n', 'اگر 1۰5 کلوگرام لکڑی کے ایک بلاک کو میز کی ہموار سطح پر <span dir=''rtl''>  6N <span dir=''rtl''>کی فورس لگا کر دھکیلا جائے تو بلاک کا ایکسلریشن معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00040, 0);
INSERT INTO `questions` VALUES(76, 'n', 'سکیلرز سے کیا مراد ہے؟ پانچ سکیلر مقداروں کے نام لکھیں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(77, 'n', 'ویکٹرز سے کیا مراد ہے؟ پانچ ویکٹر مقداروں کے نام لکھیں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(78, 'n', 'ویکٹر کے نمائندہ خط سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(79, 'n', 'فریم آف ریفرنس سے کیا مراد ہے؟ اسکا استعمال بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(80, 'n', 'منفی ویکٹر سے کیا مراد ہے؟مثال سے واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(81, 'n', 'ریزلٹنٹ ویکٹر کی تعریف لکھیں اور مثال دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(82, 'n', 'ہیڈ ٹو ٹیل رول سے کیا مراد ہے؟ مثال سے واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(83, 'n', 'اگر آپ گھر سے سائیکل پر 5کلومیٹر دور جا کر واپس گھر آجاتے ہیں تو آپ نے کل کتنا فاصلہ طے کیا اور آپ کا ڈسپلیسمنٹ کتنا ہوا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(84, 'n', ' <span dir=''rtl''>600</span>  \r\nنیوٹن فورس شمال سے 45<sup>0</sup> مشرق کی طرف عمل کرتی ہے۔ فورس کا نمائندہ خط کھینچئے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(85, 'n', 'ویکٹروں کی تفریق سے کیا مراد ہے؟ مثال دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(86, 'n', 'ٹرگنومیٹری کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(87, 'n', 'ٹرگنومیٹرک ریشوز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(88, 'n', 'اگر ویکٹر \r\n<span dir=''rtl''>A</span>\r\nویکٹر\r\n <span dir=''rtl''>B</span>\r\nمیں جمع کیا جائے تو کس شرط کے تحت اُنکا رزلٹنٹ صفر ہوگا ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(89, 'n', 'وہ کونسے دو ویکٹرز ہیں جنکا ریزلٹنٹ صفر ہوگا؟ مثال دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(90, 'n', 'کس شرط کے تحط تین ویکٹرز کا مجموعہ صفر ہوگا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(91, 'n', 'ویکٹروں کی تفریق دراصل ویکٹروں کی جمع ہی ہے، وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(92, 'n', 'اگر ویکٹر\r\n<span dir=''rtl''>A</span>\r\nکو\r\n<span dir=''rtl''>-2</span> \r\nسے ضرب دی جائے تو اسکی مقدار اور سمت میں کیا فرق پڑے گا\r\nمثال دیکر واضح کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(93, 'n', 'کسی دو مقامات کے درمین فاصلہ اور ڈسپلیسمنٹ کس شرط کے تحط مساوی ہونگے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(94, 'n', ' ایک شخص تین مخالف سمتوں میں جوگنگ کرتا ہو گھر واپس آجاتا ہے۔ اگر وہ پہلے 800 میٹر مغرب اور پھر 1300 میٹر شمال کی طرف گیا ہو تو تیسری سمت میں اس نے کتنا فاصلہ کیا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(95, 'n', 'ایک آبدوز سمندر کی افقی سطح سے 30<sup>0</sup> پر غوطہ لگاتی ہوئی 50 میٹر سیدھی چلتی ہے۔ آبدوز پانی کی سطح سے کتنی نیچے ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(96, 'n', ' ویکٹر کے کمپونینٹس سے کیا مراد ہے۔ اسکے ریکٹینگولر کمپونینٹس کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00041, 0);
INSERT INTO `questions` VALUES(97, 'n', 'ڈیٹا پراسسنگ سے کیا مراد پے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 1);
INSERT INTO `questions` VALUES(98, 'n', 'کمپیوٹر ہارڈ ویئر کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 2);
INSERT INTO `questions` VALUES(99, 'n', 'ہارڈ وئیر کے آلات کی چند مثالیں دیں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 3);
INSERT INTO `questions` VALUES(100, 'n', 'کمپیوٹر سافٹ وئیر کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 4);
INSERT INTO `questions` VALUES(101, 'n', 'ایپلی کیشن سافٹ وئیر کی مختلف اقسام تحریر کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 5);
INSERT INTO `questions` VALUES(102, 'n', 'سافٹ وئیر اور ہارڈ وئیر میں تعلق بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 6);
INSERT INTO `questions` VALUES(103, 'n', 'ان پُٹ یونٹ کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 7);
INSERT INTO `questions` VALUES(104, 'n', 'آؤٹ پُٹ یونٹ کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 8);
INSERT INTO `questions` VALUES(105, 'n', 'سسٹم یونٹ کیا ہوتا ہے؟ ', 'sq', '', NULL, NULL, NULL, '##', '##', NULL, 00048, 9);
INSERT INTO `questions` VALUES(106, 'n', 'مدر بورڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 10);
INSERT INTO `questions` VALUES(107, 'n', 'سسٹم سافٹ وئیر کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 11);
INSERT INTO `questions` VALUES(108, 'n', 'ایپلی کیشن سافٹ وئیر کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 12);
INSERT INTO `questions` VALUES(109, 'n', 'کمپیوٹر میں سی پی یو کا کیا کردار ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 13);
INSERT INTO `questions` VALUES(110, 'n', '<span dir=''rtl''>ALU</span> سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 14);
INSERT INTO `questions` VALUES(111, 'n', 'سی پی یو کا لاجک یونٹ کیا کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 16);
INSERT INTO `questions` VALUES(112, 'n', 'سی پی یو کا کنٹرول یونٹ کیا کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 17);
INSERT INTO `questions` VALUES(113, 'n', 'رجسٹرز کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 18);
INSERT INTO `questions` VALUES(114, 'n', 'سسٹم بس کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 19);
INSERT INTO `questions` VALUES(115, 'n', 'مختلف سسٹم بسیں کون کون سی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 20);
INSERT INTO `questions` VALUES(116, 'n', 'ڈیٹابس کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 21);
INSERT INTO `questions` VALUES(117, 'n', 'ایڈریس بس کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 22);
INSERT INTO `questions` VALUES(118, 'n', 'سی پی یو کا ارتھمیٹک یونٹ کیا کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 15);
INSERT INTO `questions` VALUES(119, 'n', 'کنٹرول بس کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 23);
INSERT INTO `questions` VALUES(120, 'n', 'کمپیوٹر سٹوریج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 24);
INSERT INTO `questions` VALUES(121, 'n', 'مین میموری کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 25);
INSERT INTO `questions` VALUES(122, 'n', 'سیکنڈری میموری کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 26);
INSERT INTO `questions` VALUES(123, 'n', 'ان پُٹ اور آؤٹ پُٹ کے آلات کی وضاحت کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 27);
INSERT INTO `questions` VALUES(124, 'n', 'پورٹس کیا ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 28);
INSERT INTO `questions` VALUES(125, 'n', 'سیریل پورٹ کا استعمال بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 29);
INSERT INTO `questions` VALUES(126, 'n', 'متوازی پورٹ کا استعمال بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 30);
INSERT INTO `questions` VALUES(127, 'n', '<span dir=''rtl''>USB پورٹ کا استعمال بیان </span>کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00048, 31);
INSERT INTO `questions` VALUES(128, 'n', 'ان پُٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 1);
INSERT INTO `questions` VALUES(129, 'n', 'ان پُٹ آلات کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 2);
INSERT INTO `questions` VALUES(130, 'n', 'عام استعمال ہونے والے ان پُٹ آلات کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 3);
INSERT INTO `questions` VALUES(131, 'n', 'کی بورڈ کا استعمال کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 4);
INSERT INTO `questions` VALUES(132, 'n', '<span dir=''rtl''>QWERTY</span> سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 5);
INSERT INTO `questions` VALUES(133, 'n', 'فنکشن کیز کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 6);
INSERT INTO `questions` VALUES(134, 'n', 'کرسر کنٹرول کیز کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 7);
INSERT INTO `questions` VALUES(135, 'n', 'پوائنٹنگ آلات کی چند مثالیں تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 8);
INSERT INTO `questions` VALUES(136, 'n', 'ماؤس کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 9);
INSERT INTO `questions` VALUES(137, 'n', 'ماؤس کیسے کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 10);
INSERT INTO `questions` VALUES(138, 'n', 'ماؤس ایونٹ سے کیا مراد ہے؟\r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 11);
INSERT INTO `questions` VALUES(139, 'n', 'ٹریک بال کا استعمال واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 12);
INSERT INTO `questions` VALUES(140, 'n', 'ماؤس کے مقبلے میں ٹریک بال کا کیا فائدہ ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 13);
INSERT INTO `questions` VALUES(141, 'n', 'جوائے سٹک کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 14);
INSERT INTO `questions` VALUES(142, 'n', 'جوائے سٹک اور ماؤس میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 15);
INSERT INTO `questions` VALUES(143, 'n', 'سکینر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 16);
INSERT INTO `questions` VALUES(144, 'n', 'سکین کیا گیا ٹیکسٹ عام ٹیکسٹ میں کیسے تبدیل کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 17);
INSERT INTO `questions` VALUES(145, 'n', 'مائیکروفون کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 18);
INSERT INTO `questions` VALUES(146, 'n', 'وائس ریکگنیشن سسٹم کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 19);
INSERT INTO `questions` VALUES(147, 'n', 'لائٹ پن پر نوٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 20);
INSERT INTO `questions` VALUES(148, 'n', 'ڈیجیٹل کیمرہ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 21);
INSERT INTO `questions` VALUES(149, 'n', 'ڈسک ڈرائیو سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 22);
INSERT INTO `questions` VALUES(150, 'n', 'آؤٹ پُٹ کسے کہتے ہیں ؟ اسکی اقسام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 23);
INSERT INTO `questions` VALUES(151, 'n', 'آؤٹ پُٹ آلات کی تعریف کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 24);
INSERT INTO `questions` VALUES(152, 'n', 'چند اہم آؤٹ پُٹ آلات کے نام تحریر کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 25);
INSERT INTO `questions` VALUES(153, 'n', 'مونیٹر کا استعمال واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 26);
INSERT INTO `questions` VALUES(154, 'n', 'مونیٹر کی مختلف اقسام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 27);
INSERT INTO `questions` VALUES(155, 'n', '<span dir=''rtl''> CRT </span> مونیٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 28);
INSERT INTO `questions` VALUES(156, 'n', 'فلیٹ پینل مونیٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 29);
INSERT INTO `questions` VALUES(157, 'n', 'سافٹ کاپی اور ہارڈ کاپی میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 30);
INSERT INTO `questions` VALUES(158, 'n', 'ویڈیو کنٹرولر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 31);
INSERT INTO `questions` VALUES(159, 'n', 'پرنٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 32);
INSERT INTO `questions` VALUES(160, 'n', 'امپیکٹ پرنٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 33);
INSERT INTO `questions` VALUES(161, 'n', 'نان امپیکٹ پرنٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 34);
INSERT INTO `questions` VALUES(162, 'n', 'دو نان امپیکٹ پرنٹرز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 35);
INSERT INTO `questions` VALUES(163, 'n', 'ڈاٹ میٹرکس پرنٹر کیسے کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 36);
INSERT INTO `questions` VALUES(164, 'n', 'لیزر پرنٹر کیسے کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 37);
INSERT INTO `questions` VALUES(165, 'n', 'پکسل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 38);
INSERT INTO `questions` VALUES(166, 'n', 'انک جیٹ پرنٹر کیسے کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 39);
INSERT INTO `questions` VALUES(167, 'n', 'پلاٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 40);
INSERT INTO `questions` VALUES(168, 'n', '<span dir=''rtl''> cd-r </span> کیا ہوتا ہے؟\r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 41);
INSERT INTO `questions` VALUES(169, 'n', '<span dir=''rtl''> cd-rw </span> کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00049, 42);
INSERT INTO `questions` VALUES(170, 'n', 'سیکوئنشل ایکسس سٹوریج میں ڈیٹا تک رسائے کیسے ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 1);
INSERT INTO `questions` VALUES(171, 'n', 'ڈائریکٹ ایکسس سٹوریج میں ڈیٹا تک رسائی کیسے ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 2);
INSERT INTO `questions` VALUES(172, 'n', 'مین میموری کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 3);
INSERT INTO `questions` VALUES(173, 'n', 'ریم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 4);
INSERT INTO `questions` VALUES(174, 'n', 'ڈی ریم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 5);
INSERT INTO `questions` VALUES(175, 'n', 'ایس ریم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 6);
INSERT INTO `questions` VALUES(176, 'n', 'روم کا استعمال کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 7);
INSERT INTO `questions` VALUES(177, 'n', 'پی روم کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 8);
INSERT INTO `questions` VALUES(178, 'n', 'ای پی روم کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 9);
INSERT INTO `questions` VALUES(179, 'n', 'ای ای پی روم کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 10);
INSERT INTO `questions` VALUES(180, 'n', 'سیکنڈری میموری سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 11);
INSERT INTO `questions` VALUES(181, 'n', 'فلاپی ڈسک کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 12);
INSERT INTO `questions` VALUES(182, 'n', 'ہارڈ ڈسک کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 13);
INSERT INTO `questions` VALUES(183, 'n', 'مقناطیسی ڈسک سٹوریج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 14);
INSERT INTO `questions` VALUES(184, 'n', 'مقناطیسی ڈسک میں ڈیٹا کیسے محفوظ کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 15);
INSERT INTO `questions` VALUES(185, 'n', 'فارمیٹنگ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 16);
INSERT INTO `questions` VALUES(186, 'n', 'نچلے درجے کی فارمیٹنگ کی ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 17);
INSERT INTO `questions` VALUES(187, 'n', 'اونچے درجے کی فارمیٹنگ کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 18);
INSERT INTO `questions` VALUES(188, 'n', 'کمپیکٹ ڈسک سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 19);
INSERT INTO `questions` VALUES(189, 'n', 'مقناطیسی ٹیپ کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 20);
INSERT INTO `questions` VALUES(190, 'n', 'مقناطیسی ٹیپ میں ڈیٹا کی تنظیم کیسے ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 21);
INSERT INTO `questions` VALUES(191, 'n', 'بِٹ اور بائٹ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 22);
INSERT INTO `questions` VALUES(192, 'n', 'پرائمری میموری اور سیکنڈری میموری میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 23);
INSERT INTO `questions` VALUES(193, 'n', 'ایس ریم اور ڈی ریم میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 24);
INSERT INTO `questions` VALUES(194, 'n', 'ڈی ریم ذیادہ تونائی کیوں استعمال کرتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 25);
INSERT INTO `questions` VALUES(195, 'n', 'سیک ٹائم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 26);
INSERT INTO `questions` VALUES(196, 'n', 'ایک گیگا بائٹ کو بائٹس میں تبدیل کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 27);
INSERT INTO `questions` VALUES(197, 'n', 'ڈسک ڈرائیو سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00050, 28);
INSERT INTO `questions` VALUES(198, 'n', 'ڈیٹا کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(199, 'n', 'انفامیشن کی تریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(200, 'n', 'ڈیٹا اور انفارمیشن میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(201, 'n', 'عددی نظام کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(202, 'n', 'کسی عددی نظام کی بیس یا ریڈکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(203, 'n', 'کمپیوٹر ثنائی نظام میں کام کرتا ہے پھر آکٹل یا ہیکساڈیسیمل نظام کا کیا کردار ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(204, 'n', 'آکٹل عددی نظام کی ایک خوبی بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(205, 'n', 'ثنائی عددی نظام اور اعشاری عددی نظام میں فرق بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(206, 'n', 'اعشاری عددی نظام کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(207, 'n', 'ثنائی عددی نظام کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(208, 'n', 'آکٹل عددی نظام کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(209, 'n', 'ثنائی اعداد کیلئے 1 کا کمپلیمنٹ کیسے حاصل کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(210, 'n', 'ہیکساڈیسیمل عددی نظام کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(211, 'n', 'ثنائی اعداد کیلئے 2 کا کمپلیمنٹ کیسے حاصل کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(212, 'n', '10111001\r\nکیلئے 1 کا کمپلیمنٹ معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(213, 'n', 'کمپیوٹر کوڈ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(214, 'n', '<span dir=''rtl''> BCD </span> کوڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(215, 'n', '<span dir=''rtl''>ASCII </span> کوڈ سے کیا مراد ہے؟\r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(216, 'n', '<span dir=''rtl''> EBCDIC </span>کوڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(217, 'n', 'یونی کوڈ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(218, 'n', ' <span dir=''rtl''> LSD سے کیا مراد ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(219, 'n', '<span dir=''rtl''> MSD </span> سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(220, 'n', 'بولین الجبرا کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(221, 'n', 'پراپوزیشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(222, 'n', 'بولین متغیر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(223, 'n', '<span dir=''rtl''> AND </span> آپریشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(224, 'n', '<span dir=''rtl''> OR </span>آپریشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(225, 'n', '<span dir=''rtl''> NOT </span>آپریشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(226, 'n', 'بولین ایکسپریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(227, 'n', 'بولین فنکشن کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(228, 'n', 'بولین فنکشن کو سادہ کیسے بنایا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(229, 'n', 'ٹروتھ ٹیبل کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(230, 'n', '<span dir=''rtl''> X+Y <span> کا ٹروتھ ٹیبل بنائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(231, 'n', 'کارناف میپ کے ذریعے سادہ بنانے کے عمل کے فوائد اور نقصانات کیا ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(232, 'n', 'سافٹ وئیر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(233, 'n', 'سسٹم سافٹ وئیر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(234, 'n', 'ایپلی کیشن سافٹ وئیر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(235, 'n', 'آپریٹنگ سسٹم کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(236, 'n', 'یوزر انٹرفیس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(237, 'n', 'گرافیکل یوزر انٹر فیس آپریٹنگ سافٹ وئیر کی چند مثالیں دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(238, 'n', 'چند مقبول آپریٹنگ سسٹم کے نام لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(239, 'n', 'آپریٹنگ سسٹم کے اہم کام کون کونسے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(240, 'n', 'کمانڈ لائن یوزر انٹرفیس کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(241, 'n', '<span dir=''rtl''> GUI <span>سے کیا مراد ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(242, 'n', '<span dir=''rtl''> DOS </span> سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(243, 'n', 'بیچ فائل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(244, 'n', 'کمانڈ فائل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(245, 'n', 'ایگزیکیوٹ ایبل فائل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(246, 'n', 'ڈاس کمانڈ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(247, 'n', 'ڈاس کمانڈ میں پیرامیٹر کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(248, 'n', 'ڈاس کمانڈ میں سوئچز کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(249, 'n', 'اندرونی کمانڈز کیا ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(250, 'n', 'پانچ اندرونی کمانڈز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(251, 'n', 'بیرونی کمانڈز کیا ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(252, 'n', 'پانچ بیرونی کمانڈز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(253, 'n', '<span dir=''rtl''> DELTREE </span> اور <span dir=''rtl''> RD </span> کمانڈ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(254, 'n', '<span dir=''rtl''> COPY </span> اور <span dir=''rtl''> XCOPY </span> کمانڈ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(255, 'n', 'نئی ڈائریکٹری بنانے کیلئے کون سی کمانڈ استعمال کی جاتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(256, 'n', 'وائلڈ کارڈز کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(257, 'n', 'ونڈوز آپریٹنگ سسٹم کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(258, 'n', 'ڈسک ڈرائیو سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(259, 'n', 'فولڈر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(260, 'n', 'فائل کے ساتھ ایکٹینشن کیوں لگائی جاتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(261, 'n', 'آئیکون سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(262, 'n', 'ونڈوز آپریٹنگ سسٹم کے چند آئیکون کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(263, 'n', 'ری سائیکل بِن کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(264, 'n', 'انٹرنیٹ ایکسپلورر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(265, 'n', 'ونڈوز میں ٹاسک بار کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(266, 'n', 'ونڈوز ایکسپلورر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(267, 'n', 'شارٹ کٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(268, 'n', 'ونڈوز ڈیسک ٹاپ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(269, 'n', 'سٹارٹ بٹن کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(270, 'n', 'مینیو کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(271, 'n', 'کنٹرول پینل کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(272, 'n', 'کمپیوٹر وائرس کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(273, 'n', 'اینٹی وائرس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(274, 'n', 'ماؤس کے مختلف ایونٹس تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(275, 'n', 'ونڈوز کے مختلف کنٹرولز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(276, 'n', 'کنٹرول پینل کے پانچ آپشنز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(277, 'n', 'مختلف اینٹی وائرس پروگراموں کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(278, 'n', 'پیرالل فورسز سے کیا مرادہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(279, 'n', 'لائک اور ان لائک پیرالل فورسز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(280, 'n', 'ٹارک سے کیا مراد ہے؟\r\nایس آئی یونٹ تحریر کریں۔ \r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(281, 'n', 'مومنٹ آرم سے کیا مراد ہے؟ شکل بنا کر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(282, 'n', 'ٹارک کا انحصار کِن عوامل پر ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(283, 'n', 'ٹارک کی سمت معلوم کرنے کیلئے دائیں ہاتھ کا اصول بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(284, 'n', 'فورس آف گریویٹی سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(285, 'n', 'سنٹر آف گریویٹی سے کیا مراد ہے؟ اسکا اندازہ کس طرح لگایا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(286, 'n', 'سنٹر آف گریویٹی جسم کے اندر واقع ہوتا ہے یا جسم کے باہر؟ مثالیں دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(287, 'n', 'پلمب لائن سے کیا مراد ہے؟ اسکا استعمال بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(288, 'n', 'بے قاعدہ شکل کے پتنگ نما جسم کا سنٹر آف گریویٹی کسطرح معلوم کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(289, 'n', 'کپل سے کیا مراد ہے؟ مثال دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(290, 'n', 'توازن کی پہلی شرط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(291, 'n', ' توازن کی دوسری شرط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(292, 'n', 'ایکولبریم کی کتنی حالتیں ہوتی ہیں؟ نام بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(293, 'n', 'قیام پزیر ایکولبریم سے کیا مراد ہے؟ مثال دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(294, 'n', 'غیر قیام پزیر ایکولبریم سے کیا مراد ہے؟ مثال دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(295, 'n', ' نیوٹرل ایکولبریم سے کیا مراد ہے؟ مثال دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(296, 'n', 'گاڑی کے ٹائر کا نٹ کھولنے کیلئے ایک سپینر استعمال کیا گیا ہے جس کی لمبائی 30 سینٹی میٹر ہے۔ اگر نٹ کھولنے کیلئے 150 نیوٹن میٹر کا ٹارک درکار ہو تو سپینر پر کم سے کم کتنی فورس لگانا پڑے گی؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(297, 'n', 'اگر کسی جسم پر ایک ہی فورس عمل کر رہی ہو تو کیا وہ ایکولبریم میں ہوسکتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(298, 'n', 'کیا کوئی جسم ایکولبریم میں ہو سکتا ہے؟ جبکہ صرف ایک ٹارک کے عمل کرنے سے جسم کلاک وائز گردش کرے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(299, 'n', 'ایک ایسی مثال دیں جِس میں ریزلٹنٹ فورس صفر ہو لیکن ریزلٹنٹ ٹارک صفر نہ ہو۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(300, 'n', 'ریسنگ کار کی اونچائی بہت کم رکھی جاتی ہے۔ کیوں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(301, 'n', 'کسی جسم کے سنٹر آف گریویٹی کی پوزیشن سے ہمیں کیسے پتا چلتا کہ یہ جسم قیام پزیر یا غیر قیام پزیر ایکولبریم کی حالت میں ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00042, 0);
INSERT INTO `questions` VALUES(302, 'n', 'سینٹری پیٹل فورس سے کیا مراد ہے؟ اسکا حسابی فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(303, 'n', 'سرکلر موشن سے کیا مراد ہے؟ مثال سے واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(304, 'n', 'دو مثالیں دیکر واضح کریں کہ سینٹری پیٹل فورس دائرے میں گھومنے والے جسم کو کہاں سے حاصل ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(305, 'n', 'سینٹری پیٹل ایکسلریشن سے کیا مراد ہے؟ اسکا حسابی فارمولہ اخذ کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(306, 'n', 'سینٹری فیوگل فورس کیا ہوتی ہے؟ مثال دیکر واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(307, 'n', 'سینٹری پیٹل فورس کی ایک ایپلیکیشن ﴿اطلاق﴾ بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(308, 'n', 'موڑ پر سڑک کا بیرونی کنارا اندرونی کنارے سے اونچا کیوں رکھا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(309, 'n', 'سینٹری پیٹل فورس کا عملی اطلاق کہاں کہاں نظر آتا ہے، چند مثالیں دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(310, 'n', 'اگر سڑک بارش کی وجہ سے گیلی ہو تو موڑ کاٹتے ہوئے موٹر کار کے پھسلنے کا اندیشہ ہوتا ہے۔ کیوں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(311, 'n', 'سینٹری فیوج آلہ کس کام آتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(312, 'n', 'واشنگ مشین کا ڈرائر کس اصول پر کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(313, 'n', 'دودھ سے بالائی کس اصول  کے تحت اور کیسے الگ کی جاتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(314, 'n', 'گریوی ٹیشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(315, 'n', 'نیوٹن کا گریوی ٹیشن کا قانون بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(316, 'n', 'ثابت کریں کہ <span dir=''rtl''>G</span> وہ فورس ہےجو ایک کلو گرام ماس کا جسم ایک میٹر کے فاصلے پر پڑے دوسرے ایک کلو گرام ماس کے جسم پر لگاتا ہے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(317, 'n', 'ایک سکے اور پتھر کا وزن بالترتیب  <span dir=''rtl''>KG10</span>  اور <span dir=''rtl''>KG100</span>  ہے۔ سکے اور پتھر کا ایکسلریشن معلوم کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(318, 'n', 'خطِ استواء اور قطبین پر گریوی ٹیشنل ایکسلریشن کی قیمت میں فرق کی وجہ بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(319, 'n', 'بلندی کے ساتھ گریوی ٹیشنل ایکسلریشن میں کیا تبدیلی واقع ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(320, 'n', 'آزادانہ گرتے ہوئے اجسام کے گریوی ٹیشنل ایکسلریشن پر اُن کے ماس کا کیا اثر پڑتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(321, 'n', 'اگر ایک جسم کا ماس دوگنا کر دیا جائے تو اجسام کے مابین گریوی ٹیشنل فورس پر کیا اثر پڑتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(322, 'n', 'آربیٹل ولاسٹی سے کیا مراد ہے؟ اسکا حسابی فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00043, 0);
INSERT INTO `questions` VALUES(323, 'n', 'ورک سے کیا مراد ہے؟ اسکا حسابی فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(324, 'n', 'ثابت کریں کہ <span dir=''rtl''>Ns = kgms<sup>-1</sup></span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(325, 'n', 'سسٹم انٹرنیشنل میں ورک کا یونٹ کیا ہے؟ اسکی علامت اور تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(326, 'n', 'جب آگ جلانے کیلئے ماچس کی تیلی کو رگڑا جاتا ہے تو کیا کوئی ورک ہوتا ہے؟ وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(327, 'n', 'پاور سے کیا مراد ہے؟ اسکا حسابی فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(328, 'n', 'سسٹم انٹرنیشنل میں پاور کا یونٹ کیا ہے؟ اسکی علامت اور تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(329, 'n', '40 کلوگرام وزنی ایک ایتھلیٹ 10 میٹر بلند سیڑھی پر 10 سیکنڈ میں چڑھنے میں کتنی پاور استعمال کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(330, 'n', 'سسٹم انٹرنیشنل میں  انرجی کے یونٹ کی علامت اور تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(331, 'n', 'انرجی کی دو بنیادی اقسام کون کونسی ہیں؟ تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(332, 'n', 'کائی نیٹک انرجی سے کیا مراد ہے؟ کائی نیٹک انرجی کا حسابی فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(333, 'n', ' پوٹینشل انرجی سے کیا مراد ہے؟ اسکا حسابی فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(334, 'n', 'غلیل کو جب کھینچ  کر  چھوڑا جاتا ہے تو اس میں ہونے والی انرجی کی تبدیلیوں کے بارے میں لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(335, 'n', 'ایلاسٹک پوٹینشل انرجی سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(336, 'n', ' گریوی ٹیشنل پوٹینشل انرجی سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(337, 'n', 'ماس کو دُگنا کرنے سے کائی نیٹک انرجی پر کیا اثر پڑتا ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(338, 'n', 'ایک باؤلر کرکٹ کھیلتے ہوئے 200 گرام ماس کا گیند 20 میٹر فی سیکنڈ کی ولاسٹی سے پھینکتا ہے۔ گیند کی کائی نیٹک انرجی معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(339, 'n', 'ایک مزدور ایک بکس کو دھکیل کر 20 میٹر کے فاصلے تک لے جاتا ہے۔ اگر بکس کو دھکیلنے کے لئے <span dir=''rtl''>25N</span>  کی فورس درکار ہو تو ورک کی مقدار معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(340, 'n', 'ایک شخص  <span dir=''rtl''>10KG</span> کا پتھر اٹھا کر 5 میٹر کی بلندی پر کھڑا ہے۔ اس نے کتنا ورک کیا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00044, 0);
INSERT INTO `questions` VALUES(341, 'n', 'مشین سے کیا مراد ہے؟ مشینوں کے کوئی سے دو فائدے بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(342, 'n', 'ایفرٹ اور لوڈ میں فرق بیان کریں۔ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(343, 'n', 'مکینیکل ایڈوانٹیج سے کیا مراد ہے؟ اس کا حسابی فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(344, 'n', 'آپ مشین کی صلاحیت کیسے بڑھا سکتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(345, 'n', 'اِن پُٹ سے کیا مراد ہے؟ فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(346, 'n', 'آؤٹ پُٹ سے کیا مراد ہے؟ فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(347, 'n', 'مشین کی ایفی شینسی  سے مراد ہے؟ اسکا حسابی فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(348, 'n', 'لیور اور فلکرم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(349, 'n', 'لیور کا اصول بیان کریں، اسکی مساوات بھی تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(350, 'n', 'سنگل فکسڈ پلی کا مکینیکل ایڈوانٹیج معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(351, 'n', 'سنگل فکسڈ پلی سے 20 نیوٹن لوڈ اُٹھانے کیلئے کتنی ایفرٹ لگانا پڑے گی؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(352, 'n', 'سنگل متحرک پلی کا مکینیکل ایڈوانٹیج معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(353, 'n', 'سنگل متحرک پلی سے 20 نیوٹن لوڈ اُٹھانے میں کتنی ایفرٹ لگانا پڑے گی؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(354, 'n', 'انکلائنڈ پلین سے کیا مراد ہے؟ یہ کِس کام آتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(355, 'n', 'انکلائنڈ پلین کا مکینیکل ایڈوانٹیج ہمیشہ ایک سے ذیادہ کیوں ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(356, 'n', ' ذرا سوچئے اہرامِ مصر کو تعمیر کرنے کیلئے اتنے بھاری پتھر وہاں کیسے پہنچائے گئے ہوں گے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(357, 'n', 'سکریو جیک کے مختلف حصوں کے نام بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(358, 'n', 'سکریو جیک کی پچ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(359, 'n', ' وہیل اینڈ ایکسل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(360, 'n', 'وہیل اینڈ ایکسل کِس کام آتے ہیں؟ چند مثالیں دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(361, 'n', 'وہیل اینڈ ایکسل کے مکینیکل ایڈوانٹیج کا فارمولہ تحریر کریں ۔ یہ ایڈوانٹیج کیسے بڑھایا جا سکتاہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00045, 0);
INSERT INTO `questions` VALUES(362, 'n', 'The potential is constant throughout a given region of space. Is the electric field zero or non-zero in this region? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 1);
INSERT INTO `questions` VALUES(363, 'n', 'Suppose that you follow an electric field line due to a positive point charge. Do electric field and potential increase or decrease?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 2);
INSERT INTO `questions` VALUES(364, 'n', 'How can you identify that which plate of a capacitor is positively charged?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 3);
INSERT INTO `questions` VALUES(365, 'n', 'Describe the force or forces on  a positive point charge when placed between parallel plates\r\na) with similar and equal charges\r\n\r\nb) with opposite and equal charges', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 4);
INSERT INTO `questions` VALUES(366, 'n', 'Electric lines of force never cross each other. why?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 5);
INSERT INTO `questions` VALUES(367, 'n', 'If a point charge q of mass m is released in a non-uniform electric field with field lines pointing in the same direction, will it make a rectilinear motion?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 6);
INSERT INTO `questions` VALUES(368, 'n', 'Is E necessarily zero inside a charged rubber balloon if balloon is spherical? Assume that charge is distributed uniformly over the surface.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 7);
INSERT INTO `questions` VALUES(369, 'n', 'Is it true that Gauss''s law states that the total number of lines of force crossing any closed surface in the outward direction is proportional to the net positive charge enclosed within the surface? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 8);
INSERT INTO `questions` VALUES(370, 'n', 'Do electrons tend to go to region of high potential or of low potential?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 9);
INSERT INTO `questions` VALUES(371, 'n', 'ایلاسٹیسٹی سسے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(372, 'n', 'سٹریس سے کیا مراد ہے؟ اسکا فارمولہ اور ایس آئی یونٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(373, 'n', 'سٹرین سے کیا مراد ہے؟ اسکی اقسام کون کون سی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(374, 'n', 'ٹینسائیل سٹرین سے کیا مراد ہے؟ اس کی  یونٹ نہ ہونے کی وجہ بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(375, 'n', 'ہُک کا قانون بیان کیجئے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(376, 'n', 'ینگز ماڈولس سے کیا مراد ہے؟حسابی فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(377, 'n', 'والیومیٹرک سٹرین سےکیا  مراد ہے؟ ٰفارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(378, 'n', 'پریشر سے کیا مراد ہے؟ ایس آئی یونٹ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(379, 'n', 'پاسکل کا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(380, 'n', 'ہائڈرالک پریس کس کام آتا ہے؟ اور یہ کس اصول پر بنایا گیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(381, 'n', 'ہائڈرالک بریک کیسے کام کرتی ہیں؟ اور یہ کس اصول پر بنائی گئی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(382, 'n', 'اصولِ ارشمیدس بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(383, 'n', 'مائع میں تیرتے اجسام کی شرائط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(384, 'n', 'لکڑی کا بہت برا شہتیر تو پانی کی سطح پر تیر سکتا ہے لیکن لوہے کی ایک چھوٹی سی سوئی پانی میں ڈوب جاتی ہے، وجہ بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(385, 'n', 'آبدوز پانی کی سطح پر کیسے تیرتی ہے اور زیرِ آب کیسے جاتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(386, 'n', 'سٹیل پِن یا کلپ کو فلٹر پیپر پر رکھ کر ایک گہری ڈش میں پانی کی سطح پر رکھ دیں۔ فلٹر پیپر پانی جذب کر کے جلد ڈوب جائیگا جبکہ پِن یا کلپ سطح پر تیرتی رہے گی، وجہ؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(387, 'n', 'گیسوں کے دباؤ کی وجہ بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(388, 'n', 'اگر کسی غبارے میں ہوا بھر کر آگ کے قریب لایا جائے تو وہ پھٹ جاتا ہے، کیوں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(389, 'n', 'مادے کا کائنیٹک نظریہ بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(390, 'n', 'سرفیس ٹینشن سے کیا مراد ہے؟ اسکا یونٹ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(391, 'n', 'مائعات کو گرم کرنے سے ان کے سرفیس ٹینشن پر کیا اثر پڑتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(392, 'n', 'وسکاسٹی سے کیا مراد ہے؟ سسٹم انٹرنیشنل میں اسکا یونٹ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00046, 0);
INSERT INTO `questions` VALUES(393, 'n', 'حرارت اور ٹمپر یچر میں فرق واضح کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(394, 'n', 'طو لی پھیلا وُ کی شرح کی تعر یف  کر یں ؟ ا س کی علامت اور  ا کا ئی کیا ھے ؟  ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(395, 'n', 'ایب سولیٹ زیر و سے کیا مراد ھے؟ وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(396, 'n', 'ر یڈ ی ا یشن کی تعر یف کر یں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(397, 'n', 'فو ر سڈ کنو یکشن  سے کیا مر اد ھے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(398, 'n', 'پگھلاوُ کی حرارت مخفی سے کیا مراد ھے؟سسٹم انٹرنیشنل میں اس کا یونٹ کیا ھے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(399, 'n', 'ٹمپریچر کی پیمایش کے لیے استمال ہونے والی مختلف سکیلز کے نام بتایئے  اور ان کے انٹر کنورژن کے فارمولے لکھیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(400, 'n', 'والیوم میں پھیلاوُ کی شرح کی تعریف کیجیے ؟ اس کا سمبل اور یونٹ کیا ھے ؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(401, 'n', 'چارلس  کا قانون بیان کریں  ؟ نیز اس کا حسابی فارمولا تحریر کریں ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(402, 'n', 'تبادلہ حرارت کا قانون بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(403, 'n', 'حرارت سے ٹھوس اجسام کی مائع میں تبدیلی کی وضاحت کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(404, 'n', 'کھولاؤ کی حرارت مخفی سے کیا مراد ہے؟ ایس آئی یونٹ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(405, 'n', 'کو ایفی شینٹ آف تھرمل کنڈکٹیویٹی سے کیا مراد ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(406, 'n', 'پانی کے بے قاعدہ پھیلاؤ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(407, 'n', 'حرارت مخصوصہ سے کیا مراد ہے؟ حسابی فارمولہ اور ایس آئی یونٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(408, 'n', 'بوائل کا قانون بیان کریں۔ حسابی فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(409, 'n', 'ٹیلی ویژن پر لاہور کا ٹمپریچر <span dir=''rtl''>45<sup>0</sup>C</span>  بتایا گیا ہے۔ یہ ٹمپریچر فارن ہائٹ میں کتنا ہو گا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(410, 'n', 'طولی پھیلاؤ سے کیا مراد ہے؟ اس کا انحصار کن باتوں پر ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(411, 'n', 'مائع کے ظاہری اور حقیقی پھیلاؤ کی شرح سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(412, 'n', 'انتہائی ٹھنڈے موسم میں مچھلیاں اور دوسرے آبی جاندار کیسے زندہ رہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00047, 0);
INSERT INTO `questions` VALUES(413, 'n', 'فزکس سے کیا مراد ہے؟ وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(414, 'n', 'مکینکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(415, 'n', ' اٹامک اور مالیکیولر فزکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(416, 'n', 'نیوکلئیر فزکس کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(417, 'n', 'سالڈ سٹیٹ فزکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(418, 'n', 'الیکٹرومیگنیٹزم سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(419, 'n', 'آسٹرو فزکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(420, 'n', 'جیو فزکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(421, 'n', 'اُن قدیم یونانی سائنس دانوں کے نام تحریر کریں جِن کو جدامجد سمجھا جاتا ہے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(422, 'n', 'سائنسی طریق کا ر کے مختلف مراحل تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(423, 'n', 'مفروضہ کیا ہوتا ہے؟ یہ کیوں قائم کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(424, 'n', 'مشاہدہ اور تجربہ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(425, 'n', 'مفروضہ ، نظریہ کیسے بن جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(426, 'n', 'آئن سٹائن کون تھا؟ اسکا اہم کارنامہ بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(427, 'n', 'نظریہ اور قانون میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(428, 'n', 'بائیو فزکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(429, 'n', 'ابن الہیشم کی آپٹیکس میں دو اہم دریافتوں کا ذکر کیجئیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(430, 'n', 'البیرون کی دو اہم دریافتوں کا ذکر کیجئیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(431, 'n', 'البیرونی کی دو مشہور کتابوں کے نام لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(432, 'n', 'سائنس میں الکندی۔یعقوب ابن اسحٰق کی خدمات بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(433, 'n', 'ڈاکٹر عبد السلام کو نوبل پرائز کب اور کیوں دیا گیا؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(434, 'n', 'بنیادی مقدار سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(435, 'n', 'بنیادی اور ماخوذ یونٹس میں کیا فرق ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(436, 'n', 'ماخوذ مقدار سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(437, 'n', 'فزیکل بیلنس کس کام آتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(438, 'n', 'پیمائش میں غیر یقینیت اور غلطی سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(439, 'n', 'ورنیئر کا لیسٹ کاؤنٹ کیسے معلوم کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(440, 'n', 'سٹاپ واچ کیا ہوتی ہے اور یہ کیسے کام کرتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(441, 'n', 'زیرو ایرر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(442, 'n', 'بے قاعدہ اور باقاعدہ غلطی سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(443, 'n', 'سیکنڈ کی جدید تعریف کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(444, 'n', 'پروپورشنیلٹی کونسٹنٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(445, 'n', 'ایس آئی سسٹم میں بنیادی اکائیوں کے نام اور ان کے یونٹس لکھیں ؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(446, 'n', 'سسٹم انٹرنیشنل میں کتنی بنیادی مقداریں شامل ہیں؟ نام اور علامات تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(447, 'n', 'سسٹم انٹرنیشنل میں لمبائی کے یونٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(448, 'n', 'سسٹم انٹرنیشنل میں ماس کے ہونٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(449, 'n', 'یونٹس کے ملٹی پل اور سب ملٹی پل کے استعمال کی ضرورت کب پڑتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(450, 'n', 'سائنٹیفک نوٹیشن کسے کہتے ہیں؟ 12456.8 کو سائنٹیفک نوٹیشن میں تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(451, 'n', 'ورنیئر کا لیسٹ کاؤنٹ سے کیا مراد ہے؟ عام طور پر اسکی قیمت کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(452, 'n', 'سکریو گیج کی پچ سے کیا مراد ہے؟ عام طور پر اسکی قیمت کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(453, 'n', 'سکریو گیج کا لیسٹ کاؤنٹ کیسے معلوم کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(454, 'n', 'پیمائشی سلنڈر کس کام آتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(455, 'n', 'پیمائش کے نمایا ہندسوں سے کیا مراد ہے؟ 1.202 ملی میٹر ایک تار کا ریڈیس ہے، اس میں نمایاں ہندسوں کی تعریف کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(456, 'n', 'وائبریٹری موشن اور  روٹیٹری موشن میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(457, 'n', 'ایک ٹرک 360 کلو میٹر کا فاصلہ 5 گھنٹے میں طے کرتا ہے اسکی سپیڈ معلوم کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(458, 'n', 'ریلیٹو ولاسٹی کو مثال سے واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(459, 'n', 'آزادانہ گرتے ہوئے اجسام کے لئے ابتدائی ولاسٹی، آخری ولاسٹی کی قیمتیں اور ایکسلریشن کی علامتوٰ ں کو بیان کریں۔ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(460, 'n', 'موشن اور ریسٹ کا فرق واضح کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(461, 'n', 'سپیڈ اور ولاسٹی میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(462, 'n', 'فاصلہ اور ڈسپلیسمنٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(463, 'n', 'ایکسلریشن کی تعریف کریں اور فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(464, 'n', 'کیا کسی متحرک جسم کی ولاسٹی کی سمت مشرق کی طرف اور اس میں ایکسلریشن کی سمت مغرب کی طرف ہو سکتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(465, 'n', 'کیا کار کا سپیڈومیٹر ولاسٹی کی پیمائش کرتا ہے وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(466, 'n', 'ایک جسم یونیفارم سپیڈ سے حرکت کر رہا ہے کیا اس کی ولاسٹی بھی یونیفارم ہوگی؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(467, 'n', 'سکیلر اور ویکٹر مقداروں میں فرق بیان کریں۔؟\r\n \r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(468, 'n', 'مفروضہ کیوں قایم کیا جاتا ھے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(469, 'n', 'مالیکیو لر فارمولا اور امپیر یکل فارمولا میں کیا فرق ھے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(470, 'n', 'گیما شعاعوں کی خصوصیات بیان کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(471, 'n', 'ایٹمی سپیکٹرم سے کیا مراد ھے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(472, 'n', 'ایووگیڈرو نمبر کی تعریف کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(473, 'n', 'ہیلوجینز کے خواص بیاں کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(474, 'n', 'آئیونائزیشن انرجی کی تعریف کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(475, 'n', 'کوویلنٹ بانڈ کی تعریف کریں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(476, 'n', 'آب سلطانی کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(477, 'n', 'گروپس اور پیریڈ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(478, 'n', 'مول کی تعریف کریں ؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(479, 'n', 'بوہر کے ماڈ ل کے د و نقا ئص لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(480, 'n', 'قانون مقلوب تناسب کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(481, 'n', 'ڈوبرائز نے عناصرکی گروپ بندی کیسے کی؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(482, 'n', 'میٹللائڈ ز کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(483, 'n', 'ٹرانزیشن عناصر کی تعریف کیجیئے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(484, 'n', 'ماڈرن دوری کلیہ بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(485, 'n', 'پہلی آئیو نائزیشن انرجی کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(486, 'n', 'آئنی مرکبات کی د و خصوصیات تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(487, 'n', 'کیمیا کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00065, 0);
INSERT INTO `questions` VALUES(491, 'n', 'موٹر کاریں کیسے حرکت کرتی ہیں؟ اس سوال کا جواب ملتا ہے', 'mcq', 'فزکس میں', 'بائیولوجی میں', 'کیمسٹری میں', 'ریاضی میں', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(492, 'n', 'سائنس کی کس شاخ میں مادہ اور انرجی کے خواص اور ان کے درمیان باہمی تعلق کا مطالعہ کیا جاتا ہے؟', 'mcq', 'فزکس میں', 'کیمسٹری میں', 'بائیولوجی میں', 'تینوں میں', '##', 'تینوں میں', NULL, 00034, 0);
INSERT INTO `questions` VALUES(493, 'n', 'فزکس کی کتنی شاخیں ہیں', 'mcq', 'نو', 'سات', 'پانچ', 'چار', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(494, 'n', 'حرکت پر اثر انداز ہونے والے طبیعی عوامل کے مطالعے کا علم ہے', 'mcq', 'مکینکس', 'آواز', 'روشنی', 'پلازما فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(495, 'n', 'حرارت ، اسکی ترسیل اور بطور انرجی اس کے استعمال کے ساتھ فزکس کی کس شاخ کا تعلق ہے؟', 'mcq', 'کوئی نہیں', 'سالڈ سٹیٹ فزکس', 'پلازمہ فزکس', 'الیکٹرومیگنیٹزم', '##', 'کوئی نہیں', NULL, 00034, 0);
INSERT INTO `questions` VALUES(496, 'n', 'اس کا تعلق سنے جا سکنے والی آواز سے وابستہ طبیعی اثرات کے مطالعے سے ہے', 'mcq', 'آواز', 'اٹامک اور مالیکیولر فزکس', 'روشنی', 'نیوکلئیر فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(497, 'n', 'روشنی کے طبیعی مظاہر سے تعلق رکھنے والی فزکس کی شاخ ہے', 'mcq', 'روشنی', 'پلازمہ فزکس', 'تھرموڈائنامکس', 'نیوکلئیر فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(498, 'n', 'اس کا تعلق برقی مقناطیسی مظاہر اور ان کے باہمی رشتے کے مطالعے سے ہے', 'mcq', 'الیکٹرومیگنیٹزم', 'نیوکلئیر فزکس', 'اٹامک اور مالیکیولر فزکس', 'سالڈ سٹیٹ فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(499, 'n', 'مادہ مشتمل ہوتا ہے', 'mcq', 'ایٹمز پر', 'مالیکیولز پر', 'ایٹمز اور مالیکیولز پر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00034, 0);
INSERT INTO `questions` VALUES(500, 'n', 'ایٹمز اور مالیکیولز کے خواص کے مطالعے کا نام ہے', 'mcq', 'اٹامک اور مالیکیولر فزکس', 'مکینکس', 'پلازما فزکس', 'نیوکلئیر فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(501, 'n', 'ایٹم کے نیوکلیس کے متعلق علم کا نام ہے', 'mcq', 'نیوکلئیر فزکس', 'الیکٹرومیگنیٹزم', 'سالڈ سٹیٹ فزکس', 'الیکٹرونکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(502, 'n', 'بہت ذیادہ ٹمپریچر پر مادہ کی حالت', 'mcq', 'پلازمہ', 'مائع', 'ٹھوس', 'گیس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(503, 'n', 'مادہ کی ٹھوس حالت میں مخصوص خاصیتوں کا مطالعہ کہلاتا ہے۔', 'mcq', 'سالڈ سٹیٹ فزکس', 'اٹامک اور مالیکیولر فزکس', 'نیوکلئیر فزکس', 'پلازما فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(504, 'n', 'ایک کلو گرام یورینیم کے ایٹموں کو توڑ کر حاصل ہونے والی انرجی کتنے کلو گرام کوئلے کو جلا کر حاصل ہوتی ہے؟', 'mcq', '<span dir=''rtl''>30 لاکھ کلو گرام</span>', '<span dir=''rtl''>40 لاکھ کلو گرام</span>', '<span dir=''rtl''>10 لاکھ کلو گرام</span>', '<span dir=''rtl''>20 لاکھ کلو گرام</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(505, 'n', 'کائنات کے ہر مظہر کا تعلق مادہ اور ۔۔۔۔۔۔۔ سے ہے', 'mcq', 'انرجی', 'پاور', 'فورس', 'پلازمہ', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(506, 'n', 'یونیورس کا ذیادہ تر حصہ ۔۔۔ کی حالت میں ہے۔', 'mcq', 'پلازمہ', 'گیس', 'فورس', 'ورک', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(507, 'n', 'اجرام فلکی کے بارے میں مطالعے کا نام ہے', 'mcq', 'آسٹروفزکس', 'جیو فزکس', 'بائیو فزکس', 'پلازمہ فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(508, 'n', 'when a glass rod is rubbed with a silk cloth, then', 'mcq', 'both glass rod and silk acquires positive charge ', 'glass rod acquires positive charge while silk acquires negative charge', 'both glass rod and silk acquires negative charge', 'glass rod acquires negative charge while silk acquires positive charge charge', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(509, 'n', 'if a glass rod is rubbed with a silk cloth it receives charge by the process of ', 'mcq', 'rubbing', 'heating', 'separation of charge', 'electric force', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(510, 'n', 'which one of the following statements is correct?', 'mcq', 'similar charges repel each other', 'similar charges attract and repel each other', 'similar charges attract each other', 'similar charges neither attract nor repel each other', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(511, 'n', 'which one of the following statement is correct?', 'mcq', 'Opposite charges attract each other', 'Opposite charges repel each other', 'Opposite charges attract and repel each other', 'Opposite charges neither attract nor repel each other', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(512, 'n', 'Metals are good conductors of electricity, because they have', 'mcq', 'large no of bounded electrons', 'small no. of bounded electrons', 'small no. of free electrons', 'large no. of free electrons', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(513, 'n', 'Two oppositely charged balls A and B attract third ball C when placed near them turn by turn. then ball C must be', 'mcq', 'none of these', 'negatively charged', 'electrically neutral', 'positively charged', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(514, 'n', 'Free elctrons are', 'mcq', 'Lossely bound', 'Tightly bound', 'Fixed', 'Strongly fixed', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(515, 'n', 'SI unit of charge is', 'mcq', 'coulomb', 'volt', 'ampere', 'calorie', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(516, 'n', 'The number of electrons in 1 coulomb charge is equal to', 'mcq', '1.6&times;10<sup>-19</sup>', '6.2&times;10<sup>18</sup>', 'zero', '6.2&times;10<sup>21</sup>', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(517, 'n', 'If the atomic number of copper is 29, the contribution of electrons per atom in the block of copper will be', 'mcq', 'zero', 'two', 'one ', 'three', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1008, 'n', 'زمین کی اندرونی ساخت کے مطالعے کا نام ہے', 'mcq', 'جیو فزکس', 'سالڈ سٹیٹ فزکس', 'نیوکلئیر فزکس', 'بائیو فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1009, 'n', 'فزکس کے اصولوں کو مد نظر رکھ کر بائیولوجی کے مطالعے کا نام ہے', 'mcq', 'بائیو فزکس', 'آسٹرو فزکس', 'جیو فزکس', 'پلازما فزکس', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1010, 'n', 'کس سائنسدان نے جدید سائنسی اصولوں کو مد نظر رکھ کر آزادانہ گرتے ہوئے اجسام کا مطالعہ کیا', 'mcq', 'گلیلیو', 'البیرونی', 'آئن سٹائن', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1011, 'n', 'لاؤڈ سپیکر کرشمہ ہے', 'mcq', 'فزکس کا', 'کیمسٹری کا ', 'ریاضی کا ', 'بائیو کا', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1012, 'n', 'فزکس کے ماہرین کی محنتوں کا کرشمہ ہے', 'mcq', 'تمام آپشن', 'کمپیوٹر', 'سولر سیل', 'بجلی کے بلب', '##', 'تمام آپشن', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1013, 'n', 'نیوٹن کس صدی کا سائنسدان ہے؟', 'mcq', 'سترہویں صدی', 'چوہدویں', 'سولہویں ', 'اٹھارویں', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1014, 'n', 'الیکٹرون مائیکروسکوپ ایجاد ہے', 'mcq', 'فزکس کی', 'ریاضی کی', 'بائیولوجی کی', 'کیمسٹری کی', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1015, 'n', 'سائنسی طریقہ کار کے مراحل ہوتے ہیں', 'mcq', 'چھ', 'چار ', 'پانچ', 'صرف تین', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1016, 'n', 'مشاہدات اور تجرباتی اعدادوشمار کے تجزئیے سے قائم کیا جاسکتا ہے', 'mcq', 'مفروضہ', 'قانون', 'مشاہدہ', 'تجربہ', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1017, 'n', 'روشنی کیسے سفر کرتی ہے؟', 'mcq', 'خطِ مستقیم', 'گول راستے پر', 'تکون', 'چکور', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1018, 'n', 'جب کوئی مفروضہ تجربے سے ثابت ہو جائے تو وہ بن جاتا ہے', 'mcq', 'نظریہ', 'پیش گوئی', 'روایت', 'قانون', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1019, 'n', 'بیسوی صدی میں کس سائنسدان نے بتایا کہ فزکس کے بنیادی ستون ماس اور انرجی درحقیقت ایک دوسرے کی ہی شکل ہیں', 'mcq', 'آئن سٹائن', 'ابن الہیشم', 'نیوٹن', 'وولٹا', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1020, 'n', 'کمپیوٹر ایجاد ہوا', 'mcq', 'بیسویں صدی میں', 'اٹھارویں صدی میں', 'سترہویں صدی میں', 'انیسویں صدی میں', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1021, 'n', 'تحقیق و مشاہدہ کی اصل روح کس نے متعارف کروائی', 'mcq', 'مسلمانوں نے', 'یونانیوں نے', 'امریکیوں نے', 'یورپیوں نے', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1022, 'n', 'ابن الہیشم پیدا ہوئے', 'mcq', '<span dir=''rtl''>965 ء میں</span>', '<span dir=''rtl''>972 ء میں</span>', '<span dir=''rtl''>983 ء میں</span>', '<span dir=''rtl''>936 ء میں</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1023, 'n', 'ابن الہیشم کی مشہور کتاب ہے', 'mcq', 'آپٹکس پر', 'کیمیا پر', 'ریاضی پر', 'بائیولوجی پر', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1024, 'n', 'روشنی پر ابن الہیشم کی مشہور کتاب کا نام ہے', 'mcq', 'المناظر', 'الشفاء', 'قانون المسعودی', 'کتاب الاسطرلاب', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1025, 'n', 'ابن الہیشم نے کیا ایجاد کیا', 'mcq', 'پن ہول کیمرا', 'کمپیوٹر', 'ٹی وی', 'ریڈیو', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1026, 'n', 'ابن لہیشم نے جسم کے کس حصے کے عمل اور اس کی اندرونی ساخت کی تشریح کی', 'mcq', 'آنکھ', 'منہ ', 'ناک', 'کان', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1027, 'n', 'البیرونی کب پیدا ہوئے', 'mcq', '<span dir=''rtl''>973 ء میں</span>', '<span dir=''rtl''>793 ء میں</span>', '<span dir=''rtl''>663 ء میں</span>', '<span dir=''rtl''>593 ء میں</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1028, 'n', 'محمود غزنوی نے خوارزم کو کب فتح کیا', 'mcq', '<span dir=''rtl''>1017 ء میں</span>', '<span dir=''rtl''>1012 ء میں</span>', '<span dir=''rtl''>1154 ء میں</span>', '<span dir=''rtl''>1512 ء میں</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1029, 'n', 'قانون المسعودی لکھی', 'mcq', 'البیرونی نے', 'ڈاکٹر عبدالسلام نے', 'الکندی نے', 'ابن الہیشم نے', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1030, 'n', 'البیرونی ماہر تھا', 'mcq', 'فزکس کا', 'بائیولوجی کا', 'فزکس اور بائیولوجی کا', 'آسٹرونومی کا', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1031, 'n', 'کس کتاب میں البیرونی نے محیط ارض نکالنے اور دریا کی گہرائی معلوم کرنے کا طریقہ بیان کیا', 'mcq', 'کتاب الاسطرلاب', 'الطب', 'المناظر', 'قانون المسعودی', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1032, 'n', 'دھاتوں کی ڈینسٹی معلوم کی', 'mcq', 'البیرونی نے', 'الکندی نے', 'ابن الہیشم نے', 'ڈاکٹر عبدالسلام نے', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1033, 'n', 'الکندی ماہر تھا', 'mcq', 'تمام', 'ہیئت کا', 'ریاضی کا', 'فزکس کا', '##', 'تمام', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1034, 'n', 'کس پاکستانی سائنسدان کو نوبل پرائز دیا گیا', 'mcq', 'ڈاکٹر عبدالسلام ', 'ڈاکٹر عبدالقدیر خان', 'ڈاکٹر ثمر مبارک مند', 'ڈاکٹر عطاءالرحمٰن', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1035, 'n', 'ڈاکٹر عبدالسلام کو نوبل پرائز ملا', 'mcq', '<span dir=''rtl''>1979 ء میں</span>', '<span dir=''rtl''>1975 ء میں</span>', '<span dir=''rtl''>1969 ء میں</span>', '<span dir=''rtl''>1971 ء میں</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1036, 'n', 'ڈاکٹر عبدالسلام نے قدرت کی کتنی بنیادی فورسز کو متحد کیا', 'mcq', 'دو', 'تین', 'چار', 'پانچ', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1037, 'n', 'ڈاکٹر عبدالقدیر خان نے 1998 ء میں کتنے کامیاب نیوکلئیر تجربے کئے', 'mcq', 'چھ', 'تین', 'نو', 'چار', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1038, 'n', 'کس تاریخ کو ڈاکٹر عبدالقدیر خان نے کامیاب نیوکلئیر تجربے کئے', 'mcq', '<span dir=''rtl''>28 مئی 1998 ء کو</span>', '<span dir=''rtl''>23 مئی 1998 ء کو</span>', '<span dir=''rtl''>25 مئی 1998 ء کو</span>', '<span dir=''rtl''>30 مئی 1998 ء کو</span>', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1039, 'n', 'زمین کا قطر پہلی دفعہ معلوم کیا', 'mcq', 'البیرونی نے', 'بو علی سینا نے', 'ابن الہیشم نے', 'الکندی نے', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1040, 'n', 'روشنی ایک مظہر ہے', 'mcq', 'طبیعی', 'کیمیائی', 'کیمائی و طبیعی دونوں', 'نہ کیمائی نہ طبیعی', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1041, 'n', 'الکندی نے کس موضوع پر کتابیں لکھیں', 'mcq', 'علم موسیقی', 'علم فلکیات', 'علم حیاتیات', 'علم لسانیات', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1042, 'n', 'سندہ کی وادی کسی سمدر کا ایسا طاس ہے جو رفتہ رفتہ مٹی سے بھر گیا ، کس نے انکشاف کیا؟', 'mcq', 'البیرونی ', 'الکندی', 'ابن الہیشم ', 'نیوٹن', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1043, 'n', 'روشنی کے ریفریکشن سے اچھی طرح واقف تھا', 'mcq', 'ابن الہیشم', 'گلیلیو', 'وولٹا', 'نیوٹن', '##', '##', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1044, 'n', 'کلاسیکل فزکس کی بنیاد ہیں', 'mcq', 'حرکت اور گریویٹیشن کے قوانین', 'حرکت کے قوانین', 'گریوی ٹیشن کے قوانین', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00034, 0);
INSERT INTO `questions` VALUES(1045, 'n', 'کسی اینٹ کی خصوصیات کو متعین کرنے کے لئے پیمائش کرنا پڑتی ہے', 'mcq', 'تمام', 'لمبائی', 'چوڑائی', 'اونچائی', '##', 'تمام', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1046, 'n', 'طبعی مقدار ہے', 'mcq', 'لمبائی اور وقت دونوں', 'لمبائی', 'وقت', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1047, 'n', 'لمبائی ، ماس، وقت، ٹمپریچر، کرنٹ اور روشنی کی شدت مقداریں ہیں', 'mcq', 'بنیادی', 'ماخوز', 'طبعی', 'غیر طبعی', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1048, 'n', 'وہ اکائیاں جو بنیادی یونٹس سے اخز کی جاتی ہیں', 'mcq', 'ماخوز ہونٹس', 'بنیادی یونٹس', 'طبعی مقداریں', 'غیر طبعی مقداریں', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1049, 'n', 'وہ تمام مقداریں جن کی تعریف بنیادی مقداروں کی نسبت  سے کی جا سکتی ہو، کہلاتی ہیں', 'mcq', 'ماخوز مقداریں', 'طبعی مقداریں', 'ماخوز یونٹس', 'غیر طبعی مقداریں', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1050, 'n', 'کسی بنیادی مقدار کی اکائی کو کہتے ہیں', 'mcq', 'بنیادی یونٹ', 'ماخوز یونٹ', 'دونوں', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1051, 'n', 'بنیادی اور ماخوز اکائیوں کے نظام کو کہتے ہیں', 'mcq', 'سسٹم آف یونٹس', 'سسٹم انٹرنیشنل', '<span dir=''rtl''>CGS</span>', 'برطانوی انجینئرنگ سسٹم', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1052, 'n', 'ناپ تول کی گیارہویں کانفرنس کب ہوئی', 'mcq', '<span dir=''rtl''>1960 ء میں  </span>', '<span dir=''rtl''>1949 ء میں  </span>', '<span dir=''rtl''>1910 ء میں  </span>', '<span dir=''rtl''>1925 ء میں  </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1053, 'n', 'سسٹم انٹرنیشنل کتنے بنیادی یونٹس کا نظام ہے؟', 'mcq', 'سات', 'نو', 'پانچ', 'تین', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1054, 'n', 'سسٹم انٹرنیشنل کے تحت لمبائی کا یونٹ ہے', 'mcq', 'میٹر', 'کلومیٹر', 'سینٹی میٹر', 'ملی میٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1055, 'n', 'سسٹم انٹرنیشنل کے تحت ماس کا یونٹ ہے۔', 'mcq', 'کلوگرام', 'گرام', 'ملی میٹر', 'ڈیسی میٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1056, 'n', 'سسٹم انٹرنیشنل کے تحت وقت کا یونٹ ہے۔', 'mcq', 'سیکنڈ', 'منٹ', 'گھنٹہ', 'دن', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1057, 'n', 'سورج کا اوسط ماس ہے', 'mcq', '6.0 &times; 10 <sup>24</sup> kg', '2.2 &times; 10 <sup>40</sup>  kg', '1.0 &times; 10 <sup>-15</sup> kg', '2.0 &times; 10 <sup>30</sup> kg', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1058, 'n', 'معیاری میٹر کونسا ہے؟', 'mcq', 'پلاٹینم', 'اریڈیم', 'ایلومینیم', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1059, 'n', 'ایک میٹر وہ فاصلہ ہے جو خلاء میں روشنی 299،792،458 ویں حصے میں طے کرتی ہے، یہ تعریف کب پیش کی گئی؟', 'mcq', '<span dir=''rtl''>1983 ء میں </span>', '<span dir=''rtl''>1935 ء میں </span>', '<span dir=''rtl''>1972 ء میں </span>', '<span dir=''rtl''>1920 ء میں </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1060, 'n', 'ایک میٹر فاصلہ روشنی ایک سیکنڈ کے کتنےویں حصے میں طے کرتی ہے؟', 'mcq', '299،792،458', '1/86400', '9،192،631،770', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1061, 'n', 'اریڈیم کے اس سلنڈر کا ماس ہے جو پیرس کے قریب ناپ تول کے بین الاقوامی ادارے میں محفوظ ہے', 'mcq', 'کلوگرام', 'گرام', 'ملی گرام', 'ڈیسی گرام', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1062, 'n', 'کب سائنسدانوں نے سال بھر کے دنوں کے وقت کی پیمائش کی؟', 'mcq', '<span dir=''rtl''>1900 ء میں </span>', '<span dir=''rtl''>1600 ء میں </span>', '<span dir=''rtl''>1700 ء میں </span>', '<span dir=''rtl''>2000 ء میں </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1063, 'n', 'ایک اوسط شمسی دن کے کتنے ویں حصے کو سیکنڈ کہتے ہیں؟', 'mcq', '<span dir=''rtl''>1/86400 ویں </span>', '<span dir=''rtl''>1/85340 ویں</span>', '<span dir=''rtl''>1/2000 ویں</span>', '<span dir=''rtl''>1/81340 ویں</span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1064, 'n', 'مستند وقت کے پیمانے کے موازنے کے لئے ایٹمی کلاک کس عنصر کا لیا جاتا ہے؟', 'mcq', 'سیزیم', 'سوڈیم', 'پلاٹینم', 'باقی تمام', '##', 'باقی تمام', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1065, 'n', 'ایٹمی کلاک کی مدد سے معیاری سیکنڈ کی تعریف کب کی گئی', 'mcq', '<span dir=''rtl''>1967 ء میں  </span>', '<span dir=''rtl''>1945 ء میں  </span>', '<span dir=''rtl''>1975 ء میں  </span>', '<span dir=''rtl''>1989 ء میں  </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1066, 'n', 'ایک سیکنڈ کے دوران سیزیم ایٹم کتنی وائبریشنز مکمل کرتا ہے', 'mcq', '9،192،631،770', '192،631،770', '9،192،770', '299،279،458', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1067, 'n', '<span dir=''rtl''> والیوم = ........ </span>', 'mcq', '<span dir=''rtl''>لمبائی &times; چوڑائی &times; اونچائی</span>', '<span dir=''rtl''>چوڑائی + لمبائی</span>', '<span dir=''rtl''>لمبائی - چوڑائی &times; اونچائی</span>', '<span dir=''rtl''>لمبائی + چوڑائی &times; اونچائی</span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1068, 'n', 'والیوم کا یونٹ ہے', 'mcq', 'مکعب میٹر', 'کلوگرام مکعب میٹر', 'کلوگرام', 'میٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1069, 'n', 'کلوگرام فی مکعب میٹر کس کا یونٹ ہے؟', 'mcq', 'ڈینسٹی', 'ایکسلریشن', 'سپیڈ', 'ولاسٹی', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1070, 'n', 'الیکٹرک کرنٹ کا یونٹ ہے', 'mcq', 'ایمپیئر', 'فیرٰڈ', 'سیکنڈ', 'نیوٹن میٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1071, 'n', 'ٹمپریچر کا یونٹ ہے', 'mcq', 'کیلون', 'جول', 'کولمب', 'مکعب میٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1072, 'n', 'مختلف یونٹس کے ملٹی پل اور سب ملٹی پل کو کیا کہتے ہیں؟', 'mcq', 'پری فکسز', 'نوٹیشن', 'ملٹی پلز', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1073, 'n', 'ورک کا یونٹ ہے', 'mcq', 'جول', 'پاسکل', 'میٹر فی سیکنڈ', 'نیوٹن', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1074, 'n', 'فورس کا یونٹ ہے', 'mcq', 'نیوٹن', 'کولمب', 'جول', 'سلگ', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1075, 'n', 'چارج کا یونٹ ہے', 'mcq', 'کولمب', 'جول', 'ایمپئیر', 'نیوٹن', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1076, 'n', 'پریشر کا یونٹ ہے', 'mcq', 'پاسکل', 'کیلون', 'کنڈیلا', 'فیراڈ', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1077, 'n', 'ولاسٹی کا یونٹ ہے', 'mcq', 'میٹر فی سیکنڈ', 'مربع میٹر', 'جول', 'ایمپئیر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1078, 'n', 'رقبہ کا یونٹ ہے', 'mcq', 'مربع میٹر', 'مول', 'کیلون', 'کلومیٹر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1079, 'n', '1 میٹر برابر ہوتا ہے', 'mcq', '<span dir=''rtl''>100 سینٹی میٹر  </span>', '<span dir=''rtl''>10 سینٹی میٹر  </span>', '<span dir=''rtl''>1000 سینٹی میٹر  </span>', '<span dir=''rtl''>1/10 سینٹی میٹر  </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1080, 'n', 'ایک سینٹی میٹر کتنے ملی میٹر کے برابر ہوتا ہے؟', 'mcq', '1000', '10', '100', '1/10', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1081, 'n', 'ایک کلو گرام میں گرام ہوتے ہیں', 'mcq', '1000', '10', '100', '1/10', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1082, 'n', '1 گرام میں کتنے ملی گرام ہوتے ہیں؟', 'mcq', '1000', '100', '10', '10ﮧ-2', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1083, 'n', '<span dir=''rtl''>1 ملی سیکنڈ = ---------</span>', 'mcq', '<span dir=''rtl''>10<sup>-3 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-1 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-6 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-2 </sup>سیکنڈ</span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1084, 'n', 'میٹر راڈ استعمال کرتے ہوئے جسم کی لمبائی کہاں تک صحیح ناپی جا سکتی ہے؟', 'mcq', '<span dir=''rtl''>1 ملی میٹر تک </span>', '<span dir=''rtl''>1 سینٹی میٹر تک </span>', '<span dir=''rtl''>1 میٹر تک </span>', '<span dir=''rtl''>1 کلو میٹر تک </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1085, 'n', 'ورنئیر کیلی پرز ملی میٹر کے کتنے حصے تک کی صحیح پیمائش کر سکتا ہے؟', 'mcq', 'دسویں حصے ', 'ساتویں حصے', 'پانچویں حصے', 'بارہویں حصے', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1086, 'n', 'ورنیئر کیلی پرز کے کتنے حصے ہوتے ہیں؟', 'mcq', 'دو', 'تین', 'چار', 'پانچ', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1087, 'n', 'ورنیئر سکیل کی لمبائی کتنی ہوتی ہے؟', 'mcq', '<span dir=''rtl''>9 ملی میٹر </span>', '<span dir=''rtl''>7 ملی میٹر </span>', '<span dir=''rtl''>11 ملی میٹر </span>', '<span dir=''rtl''>15 ملی میٹر </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1088, 'n', 'ورنیئر سکیل پر ہر دو لائنوں کا درمیانی فاصلہ برابر ہوتاہے۔', 'mcq', '<span dir=''rtl''>0.9 ملی میٹر  </span>', '<span dir=''rtl''>0.4 ملی میٹر  </span>', '<span dir=''rtl''>0.6 ملی میٹر </span>', '<span dir=''rtl''>0.8 ملی میٹر </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1089, 'n', 'مین سکیل اور ورنیئر سکیل کے درجوں کے درمیان فرق کو کہتے ہیں', 'mcq', 'ورنیئر کونسٹنٹ', 'لیسٹ کاؤنٹ', 'زیروایرر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1090, 'n', 'ورنیئر کا لیسٹ کاؤنٹ برابر ہوتا ہے', 'mcq', '<span dir=''rtl''>1/10 ملی میٹر  </span>', '<span dir=''rtl''>1/10 سینٹی میٹر  </span>', '<span dir=''rtl''>1/100 سینٹی میٹر  </span>', '<span dir=''rtl''>1/100 ملی میٹر  </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1091, 'n', 'سورج کا ریڈیس ہے', 'mcq', '6.4 &times; 10 <sup>6</sup>m', '6.4 &times; 10<sup>8</sup>m', '1.0 &times; 10 <sup>20</sup>m', '6.4 &times; 10 <sup>-9</sup>m', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1092, 'n', 'مائیکرومیٹر سکریو گیج کتنے حصے تک صحیح پیمائش کر سکتا ہے؟', 'mcq', '<span dir=''rtl''>1/100 ملی میٹر </span>', '<span dir=''rtl''>1/10 ملی میٹر </span>', '<span dir=''rtl''>1/10 سینٹی میٹر </span>', '<span dir=''rtl''>1/100 سینٹی میٹر </span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1093, 'n', 'فزیکل بیلنس سے کیا چیز ناپی جاتی ہے؟', 'mcq', 'ماس', 'وزن', 'لمبائی', 'وقت', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1094, 'n', 'سٹاپ واچ سے کیا معلوم ہوتا ہے؟', 'mcq', 'وقت کا خاص دورانیہ', 'وقت ', 'ماس', 'لمبائی', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1095, 'n', 'گھڑی پر عام طور پر ایک ڈائل کو کتنے بڑے حصوں میں تقسیم کیا جاتا ہے؟', 'mcq', '30', '45', '60', '75', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1096, 'n', 'سٹاپ واچ میں سیکنڈ کے کتنے حصے تک کی پیمائش کی جا سکتی ہے؟', 'mcq', 'سوویں', 'دسویں', 'بیسویں', 'سولہویں', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1097, 'n', 'پیمائشی سلنڈر سے کیا معلوم کیا جاتا ہے؟', 'mcq', 'والیوم', 'ڈینسٹی', 'ولاسٹی ', 'ماس', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1098, 'n', 'پیمائش میں غلطی کے امکان کی کتنی وجوہات ہوسکتی ہیں؟', 'mcq', 'تین', 'چار', 'دو', 'پانچ', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1099, 'n', 'پیمائشی غلطیوں کو کتنی اقسام میں تقسیم کیا جاسکتا ہے؟', 'mcq', 'تین', 'پانچ', 'سات', 'چھ', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1000, 'n', 'نا تجربہ کاری سے ہونے والی غلطی کو کہتے ہیں', 'mcq', 'شخصی غلطی', 'بے قاعدہ غلطی', 'باقاعدہ غلطی', 'تمام', '##', 'تمام', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1001, 'n', 'ایک باقاعدہ اصول کے تحت ہوتی ہے', 'mcq', 'باقاعدہ غلطی', 'بے قاعدہ غلطی', 'شخصی غلطی', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1002, 'n', 'کسی پیمائش میں صحیح طور پر معلوم ہندسے کہلاتے ہیں', 'mcq', 'نمایاں ہندسے', 'مشکوک ہندسے', 'نمایاں اور مشکوک ہندسے', 'تینوں غلط ہیں', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1003, 'n', '<span dir=''rtl''>ڈینسٹی = --------- </span>', 'mcq', 'ماس / والیوم', 'ماس &times; والیوم', 'والیوم - ماس', 'والیوم + ماس', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1004, 'n', '14.5 سینٹی میٹر میں نمایاں ہندسوں کی تعداد', 'mcq', 'تین', 'ایک', 'دو', 'چار', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1005, 'n', 'فاصلہ اور وقت میں کونسا راست تعلق ہے؟', 'mcq', 'متناسب', 'معکوس', 'نسبت', 'کوئی نہیں', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1006, 'n', '<span dir=''rtl''>S = k &times t </span> میں <span dir=''rtl''> k </span> کیا ہے؟ ', 'mcq', 'پروپورشنیلیٹی کونسٹنٹ', 'یونٹ', 'کونسٹنٹ', 'متغیر', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(1100, 'n', 'charge on an electron is determined by', 'mcq', 'Millikans', 'Maxwell', 'Ampere', 'Thompson', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1101, 'n', 'A insulating rod is charged positively by rubbing.This is due to ', 'mcq', 'deficiency of protons', 'excess of protons', 'dificiency of electrons', 'excess of electrons', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1102, 'n', 'when an insulating rod is charged negatively by rubbing. This is due to ', 'mcq', 'excess of protons', 'deficiency of protons', 'excess of electrons', 'deficiency of electrons', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1103, 'n', 'C.A Coulomb measured the force between two charges by', 'mcq', 'torsion balance', 'physical balance', 'cvendish balance', 'common balance', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1104, 'n', 'The quantitative measurement of force between two electric charges was made by', 'mcq', 'Faraday', 'Maxwell', 'Newton', 'coulomb', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1105, 'n', 'According to Coilomb''s law, the magnitude of the force between two point charges q1 and q2 separated by distance r is given by', 'mcq', 'k q1 q2 / r<sup>2</sup>', 'k q1 q2 / r', 'q1 q2 / kr', 'q1 q2 / k r<sup>2</sup>', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1106, 'n', 'The value of coulomb''s constant k depends upon', 'mcq', 'the system of units and the medium between the charges', 'the system of units used', 'medium between the charges', 'quantity of the charges', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1107, 'n', 'The value of coulomb''s constant k is', 'mcq', '9 &times;10<sup>-9</sup> N-m<sup>2</sup> C<sup>-2</sup>', '9 &times;10<sup>9</sup> N-m<sup>2</sup> C<sup>-2</sup>', '8.85&times;10<sup>-12</sup> N-m<sup>2</sup> C<sup>-2</sup>', '8.85&times;10<sup>12</sup> N-m<sup>2</sup> C<sup>-2</sup>', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1108, 'n', 'If the distance between the two charges is halved the force between them becomes', 'mcq', 'four times', 'doubled ', 'half', 'one half', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1109, 'n', 'If the distance between two charged bodies is doubled the electric force between them will become', 'mcq', 'one fourth', 'four times', 'twice', 'half', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1110, 'n', 'The electric force between two charges placed in air is 2N. when placed in a medium with permittivity 80, the force reduces to', 'mcq', '0.025', '0.03', '0.019', '0.029', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1111, 'n', 'In step up transformer, voltage in the primary increases and power in the secondary ', 'mcq', 'remains same', 'increases because current decreases', 'decreases because voltage increases', 'may increase if voltage remains same', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1112, 'n', 'At a specific instant emission of radioactive compound is deflected in a magnetic field. The compound can emit', 'mcq', 'electrons', 'protons', 'neutrons', 'He2+', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1113, 'n', 'Lenz''s law is a result of law of conservation of ', 'mcq', 'energy', 'charge', 'mass', 'momentum', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1114, 'n', 'If an ammeter is to be used , then we must connect with the ammeter a ', 'mcq', 'high resistance in series', 'low resistance in parallel', 'high resistance in parallel', 'low resistance in series', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1115, 'n', 'A charged particle moving in a magnetic field experiences a force in the direction', 'mcq', 'perpendicular to the field', 'along the field', 'at some angle with the field', 'opposite to the field', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1116, 'n', 'How a current carrying wire be placed to produce resultant force zero?', 'mcq', 'parallel to the field', 'perpendicular to the field', 'at 45<sup>0</sup>', 'at 60<sup>0</sup>', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1117, 'n', 'when electron moves through a magnetic field, then change occurs in', 'mcq', 'direction', 'mass', 'speed', 'energy', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1118, 'n', 'If the nucleus moves at some angle less than 90 degree in a uniform magnetic field, the trajectory will be ', 'mcq', 'helix', 'a circle', 'ellipse', 'straight line', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1119, 'n', 'If electron moves in a straight line through a cross of electric and magnetic fields then', 'mcq', 'E=Bv ', 'E=Bev', 'B=eE/v', 'E=1/2 Bev', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1120, 'n', 'A charged particle is situated in a region of space and it experiences a force only when it is in motion. It can be deduced that the region encloses', 'mcq', 'a magnetic field only', 'both electric and gravitational fields', 'both magnetic and electric fields', 'both magnetic and gravitational fields', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1121, 'n', 'An electron is moving along the axis of a solenoid carrying current. which of the following is a correct statement about the electromagnetic force acting on the electron?', 'mcq', 'no force acts', 'the force acts in the direction of motion', 'the force acts radially outwards', 'the force acts radially inwards', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1122, 'n', 'A coil is placed in a radial magnetic field then the plane of the coil is ', 'mcq', 'parallel to the field', 'at 60<sup>0</sup> to the field', '180<sup>0</sup> to the field', 'perpendicular to the field', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1123, 'n', 'A charged particle of mass m and charge q travels on a circular path of radius r that is perpendicular to a magnetic field B. The time taken by the particle to complete one revolution is', 'mcq', '2&#928;m/qB', '2&#928;qB/m', '2&#928;q<sup>2</sup>B/m', '2&#928;mq/B', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1124, 'n', 'the e/m of neutron is ', 'mcq', 'zero', 'greater than that of proton', 'smaller than that of electron', 'infinite', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1125, 'n', 'A uniform electric and magnetic fields exist in the same direction. An electron is projected with velocity pointed in the same direction. The electron will', 'mcq', 'keep moving in the same direction but speed will decrease', 'turn to its right', 'turn to its left', 'keep moving in the same direction but speed will increase', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1126, 'n', 'A charged particle enters a magnetic field such that the direction of initial velocity is different from the direction of the field. which of the following characteristics of the particle change with time?', 'mcq', 'direction of motion', 'speed', 'all', 'K.E', '##', 'all', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1127, 'n', 'If back emf is zero, then the coil draws ', 'mcq', 'maximum current', 'steady current', 'minimum current', 'zero current', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1128, 'n', 'According to the Faraday law of electromagnetic induction', 'mcq', 'electric field is produced by time varying magnetic flux', 'magnetic field is produced by time varying magnetic flux', 'magnetic field is produced with a moving charge', 'none of the above', '##', 'none of the above', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1129, 'n', 'Laminated core in a transformer is used to reduce', 'mcq', 'eddy currents losses', 'hysterisis losses', 'iron losses', 'heat losses due to resistance', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1130, 'n', 'In a transformer number of turns in the primary are 140 and that in the secondary are 280. If current in primary is 4A, then that in the secondary is ', 'mcq', '2A', '4A', '6A', '10A', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1131, 'n', 'When current flows through a conductor in a direction out of the plane of paper the magnetic field has direction', 'mcq', 'anti clockwise', 'clockwise', 'from right to left', 'from left to right', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1132, 'n', 'A current carrying conductor is placed in a magnetic field, Magnetic force acts on it will be maximum when it is placed', 'mcq', 'perpendicular to the field', 'parallel to the field', 'anti parallel to the field', 'at 45<sup>0</sup> in field', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1133, 'n', 'Which of the following in motion can not be deflected by a magnetic field', 'mcq', 'neutron', 'proton', 'electron', 'sodium ion', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1134, 'n', 'When two current carrying conductors are placed parallel to each other such that the current direction is same in both of them, Then they', 'mcq', 'attract each other', 'repel each other', 'neither attract nor repel', 'attract and repel alternatively', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1135, 'n', 'Two coils are placed closed to each other. The mutual inductance of the pair of coils depends upon', 'mcq', 'The material of the wire of the coils', 'relative position and orientation of the two coils', 'the rates at which currents are changing in the two coils', 'the currents in the two coils', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1136, 'n', 'A step down transformer is employed to reduce the main supply of 220V to 11V. The primary drawn 5A of current and the secondary draws 90A. The efficiency of the transformer is ', 'mcq', '90%', '95%', '88%', '40%', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1137, 'n', 'According to Faraday''s law of electromagnetic induction', 'mcq', 'electric field is produced by time varying magnetic flux', 'magnetic field is produced by time varying electric flux', 'magnetic field is associated with a moving charge', 'none of the above', '##', 'none of the above', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1138, 'n', 'In a loop of wire current is flowing in anticlockwise direction. It acts as', 'mcq', 'north pole', 'south pole', 'neutral', 'some time north pole and some time south pole', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1139, 'n', 'An electron describes a circular orbit of radius 2cm in a uniform magnetic field. If speed of electron is doubled then radius of the orbit is ', 'mcq', '4cm', '1cm', '0.5cm', '2cm', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1140, 'n', 'A solenoid has n turns per unit length and current I flows through it. The magnetic field of the solenoid is ', 'mcq', 'B=&mu;<sub>0</sub>nI', 'B=&epsilon;<sub>0</sub>nI', 'B=&mu;<sub>0</sub>&epsilon;<sub>0</sub>nI', 'B=&mu;<sub>0</sub>n/I', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1141, 'n', 'An induced emf is produced when a magnetic is plunged into a coil. The magnitude of the induced emf is independent of', 'mcq', 'the resisitance of the coil', 'the strength of the magnet', 'the speed with which magnet is moved', 'the number of the turns of the coil', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1142, 'n', 'A 0.5m wire is stretched horizontally carries a current of 10A from east to west in a magnetic field of 0.1T directed vertically downward. The force on the wire is', 'mcq', '0.5N south', '0.5N north', '1N south', 'none', '##', 'none', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1143, 'n', 'work done by magnetic force on a charge particle while moving through magnetic field', 'mcq', 'zero', 'qvB', 'vB/q', 'q/vB', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1144, 'n', 'Torque in the coil of galvanometer is due to interaction between', 'mcq', 'magnetic field of current and magnetic field of magnet', 'charge and magnetic field', 'current and magnetic field', 'none of these', '##', 'none of these', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1145, 'n', 'The resistance of the coil of ammeter is R, the shunt required to increase its range n times should have a resistance', 'mcq', 'R/n-1', 'R/n', 'nR', 'R/n+1', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1146, 'n', 'There are two hair spring presents in pivoted type galvanometer. These are used', 'mcq', 'a and b both', 'as current leads', 'to produce deflecting torques', 'to produce restoring torques', 'to produce deflecting torques', 'a and b both', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1147, 'n', 'Production of induced emf in a coil is linked with', 'mcq', 'change in flux through coil', 'nature of coil', 'shape of coil', 'fluc through coil', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1148, 'n', 'Mutual inductance of a pair of coils is 2H. If the current in one of the coil changes from 10A to zero in 0.1s, the emf induced in the other coil is', 'mcq', '200V', '2V', '220V', '0.2V', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1149, 'n', 'Maximum motional emf in a conductor is given by vBL. At which angle the conductor moves in magnetic field such that emf in it becomes half than its maximum value', 'mcq', '30<sup>0</sup>', '0<sup>0</sup>', '45<sup>0</sup>', '60<sup>0</sup>', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1150, 'n', 'if the magnetic flux linked with a coil varies at the rate of 1 Wb/min, the induced emf is', 'mcq', '1/60 V', '1 V', '60 V', 'none of the above', '##', 'none of the above', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1151, 'n', 'The energy stored in an inductor is directly proportional to the square of', 'mcq', 'current through inductor', 'inductance of inductor', 'magnetic flux', 'all are correct', '##', 'all are correct', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1152, 'n', 'The inductance of a coil is proportional to', 'mcq', 'the square of the number of turns', 'its length', 'the resistance of the coil', 'the number of turns', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1153, 'n', 'The current in a coil changes from 0 to 2A in 0.05s. If the induced emf is 80V, the self inductance of the coil is ', 'mcq', '2H', '1H', '1.5H', '0.5H', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1154, 'n', 'The emf linked with the same coil when the rate of change of current in the coil is unity, is equal to', 'mcq', 'self inductance', 'self induction', 'mutual induction', 'mutual indictance', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1155, 'n', 'When the ratio of the secondary turns to primary turns N<sub>s</sub>/N<sub>p</sub> is one then transformer is ', 'mcq', 'neither step up nor step down', 'none of these', 'step up', 'step down', '##', 'none of these', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1156, 'n', 'When north pole of a magnet is moved towards the face of a coil then the face of the coil acts as', 'mcq', 'north pole', 'south pole', 'can not predict', 'neutral', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1157, 'n', 'To induce an emf in a coil, the linking magnetic flux', 'mcq', 'can either increase or decrease', 'must decrease', 'must increase', 'must remain constant', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1158, 'n', 'The emf induced in 1mH inductor in which current changes from 5A to 3A in 1ms is', 'mcq', '2V', '8V', '2&times;10<sup>-6</sup>V', '8&times;10<sup>-6</sup>V', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1159, 'n', 'A current carrying conductor is placed in a uniform magnetic field parallel to it. The magnetic force exerted is', 'mcq', 'F=0', 'F=I/B', 'F=ILBsin&Theta;', 'F=I/Bsin&Theta;', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1160, 'n', 'The emf is induced in a coil of an A.C generator under the phenomenon of ', 'mcq', 'electromagnetic induction', 'self induction', 'mutual induction', 'electrostatic induction', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1161, 'n', 'The relative magnetic permeability of a material is measured in units of', 'mcq', 'No Unit', 'weber per ampere meter', 'webers', 'weber per meter square', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1162, 'n', 'An emf of 5V is induced in an inductor when the current in it changes from 3A to 2A in 1ms. The value of the self inductance is', 'mcq', '5mH', 'Zero', '50H', '5H', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1163, 'n', 'The working of all DC electric meters depends upon', 'mcq', 'magnetic effect of current', 'chemical effect of current', 'heating effect of current', 'any one', '##', 'any one', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1164, 'n', 'A step up transformer is used on a 120V line to provide 2400V. If the primary coil turns are 75, the number of secondary coil turns will be  ', 'mcq', '1500', '500', '1000', '250', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1165, 'n', 'The armature current in a dc motor is maximum when the motor has', 'mcq', 'just started moving', 'intermediate speed', 'picked up maximum speed', 'just been switched off', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1166, 'n', 'The working principle of DC motor is similar to', 'mcq', 'galvanometer', 'transformer', 'DC generator', 'AC generator', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1167, 'n', 'A coil having 500 square loops, each of side 10cm, is placed normal to magnetic field which is increasing at the rate of 1.0 tesla per second. The induced emf is', 'mcq', '5V', '1V', '0.1V', '0.5V', '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1168, 'n', 'A coil is rotated in a uniform magnetic field about an axis perpendicular to the field. The emf induced in the coil would be maximum when the plane of the coil is', 'mcq', 'parallel to the field', 'perpendicular to the field', 'at 45<sup>0</sup> to the field', 'none of above', '##', 'none of above', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1169, 'n', 'A wire suspended vertically from one of its ends is stretched by attaching a weight of 200N to the lower end. The weight stretches the wire by 1mm. Then the elastic energy stored in the wire is  ', 'mcq', '0.1 J', '0.2 J', '10 J', '20 J', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1170, 'n', 'If ''S'' is stress and ''Y'' is Young''s modulus of material of a wire, the energy stored in the wire per unit volume', 'mcq', '2Y/S<sup>2</sup>', 'S/2Y', '2S<sup>2</sup>Y', '2Y/S', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1171, 'n', 'The solids whose structure is intermediate between order and disorder are called', 'mcq', 'polymeric solids', 'amorphous', 'crystalline solids', 'glassy solids', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1172, 'n', 'A sinusoidal current is represented by the equation I = I<sub>0</sub> sin (2&omega;t)\r\nWhich equation represents the sinusoidal current when its frequecny is doubled', 'mcq', 'I = 2I<sub>0</sub> sin (2&omega;t)', '2I = I<sub>0</sub> sin (2&omega;t)', 'I = I<sub>0</sub> sin (2&omega;t)', 'I = I<sub>0</sub> sin (1/2 &omega;t)', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1173, 'n', 'Measure of deformation of solid when stress is applied is called', 'mcq', 'strain', 'energy', 'pressure', 'shear stress', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1174, 'n', 'In RC series circuit, the capacitive reactance and resistance both are equal to 100&Omega;. The impedance of circuit is ', 'mcq', '141&Omega;', '71&Omega;', '200&Omega;', '100&Omega;', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1175, 'n', 'A wire elongates by l mm when a load W is hanged from it. If the wire goes over a pulley and two weights are hung at the two ends, the elongation of the wire will be', 'mcq', 'l', 'zero', 'l/2', '2l', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1176, 'n', 'A force F is needed to break a copper wire having radius R. The force needed to break a copper wire of same length and radius 2R will be', 'mcq', '4F', 'F/2', '2F', 'F/4', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1177, 'n', 'Such substances which break soon after they cross elastic limit are called', 'mcq', 'brittle substances', 'weak substances', 'ductile substances', 'polymeric substances', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1178, 'n', 'A cable that can support a load of 800N is cut into two equal parts. The maximum load that can be supported by either part is', 'mcq', '800N', '100N', '400N', '1600N', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1179, 'n', 'The energy band which lies in between valence and conduction band are called', 'mcq', 'forbidden energy band', 'conduction band', 'valence band', 'permissible energy band', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1180, 'n', 'Young''s modulus of steel 2&times;10<sup>11</sup> N/m<sup>2</sup>. A steel wire has a length of 1m and area of cross section 1mm<sup>2</sup>. The work required to increase its length by 1mm is', 'mcq', '0.1J', '10J', '1J', '100J', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1181, 'n', 'A coil has X<sub>L</sub> 1000&Omega; at certain frequency. If its inductance and frequency both are doubled then its reactance will become  ', 'mcq', '4000&Omega;', '250&Omega;', '500&Omega;', '2000&Omega;', '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1182, 'n', 'A potential difference is applied across the ends of a copper wire. What is the effect on the drift velocity of free electron by increasing the potential difference', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1183, 'n', 'A potential difference is applied across the ends of a copper wire. What is the effect on the drift velocity of free electron by decreasing the length and the temperature of the wire', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1184, 'n', 'Do bends in wire affect its electrical resistance? Explain.\r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1185, 'n', 'Does the induced emf in a circuit depend on the resistance of the circuit?\r\nDoes the induced current in a circuit depend on the resistance of the circuit?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1186, 'n', 'A square loop of wire is moving through a uniform magnetic field. The normal to the loop is oriented parallel to the magnetic field. Is an emf induced in the loop? Give a reason for your answer.\r\n', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1187, 'n', 'A light metallic ring is released from above into a vertical bar magnet. Viewed from above does the current flow clockwise or counter clockwise in the ring?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1188, 'n', 'Does the induced emf always act to decrease the magnetic flux through a circuit. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1189, 'n', 'A coil of wire in the XY plane with a magnetic field directed in the Y-axis. Around which of the three coordinate should the coil be rotated to generate an emf and a current in the coil?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1190, 'n', 'How would you position a flat loop of wire in a changing magnetic field so that there is no emf induced in the loop?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1191, 'n', 'In a certain region the earth''s magnetic field point vertically down. When a plane flies due north, which wingtip is positively charged?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1192, 'n', 'Show that &epsilon; and &Delta;&Phi;/&Delta;t have the same units', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1193, 'n', 'When an electric motor, such as an electric drill is being used, does it also act a s generator? If so what is the consequence of this?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1194, 'n', 'Can a dc motor be turned into a DC generator? what changes are required to be done?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1195, 'n', 'Is it possible to change both the area of the loop and magnetic field passing through the loop and still not have an induced emf in the loop?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1196, 'n', 'Can an electric motor be used to drive an electric generator with the output from the generator being used to operate the motor?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1197, 'n', 'A suspended magnet is oscillating freely in a horizontal plane. The oscillations are strongly damped when a metal plate is placed under the magnet. Explain why this occurs?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1198, 'n', 'Four unmarked wires emerge from a transformer. What steps would you take to determines the turns ratio?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1199, 'n', 'Can a step up transformer increase the power level? In a transformer, there is no transfer of charge from primary to the secondary. How is, then the power transferred?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1200, 'n', 'Why dos the resistance of a conductor rise with temperature?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1201, 'n', 'What are the difficulties in testing whether the filament of a lighted bulb obeys ohm''s law?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1202, 'n', 'Is the filament resistance lower or higher in a 500W, 220V light bulb than in a 100W, 220v bulb?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1203, 'n', 'Describe a circuit which will give a continuously varying potential.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1204, 'n', 'Explain why the terminal potential difference of a battery decreases when current draw from it is increased? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1205, 'n', 'What is wheatstone bridge?  How it can be used to determine an unknown resistance?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1206, 'n', 'A plane conducting loop is located in a uniform magnetic field that is directed along the x-axis. For what orientation of the loop is the flux a maximum? For what orientation is the flux a minimum?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1207, 'n', 'A current in a conductor produces a magnetic field, which can be calculated using Ampere''s law. Since current is defined as the rate of flow of charge, what can you conclude about the magnetic field due to stationary charges? What about moving charges? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1208, 'n', 'Describe the change in the magnetic field inside a solenoid carrying a steady current I, if (a)the length of the solenoid is doubled but the number of turns remains the same and (b) the number of turns is doubled, but the length remains the same.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1209, 'n', 'At a instant,a proton moves in the positive x direction in a region where there is magnetic field in the negative z direction. What is the direction of the magnetic force? Will the proton continue to move in the positive x direction? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1210, 'n', 'When two charged bodies are connected but no current flows between them then they have same', 'mcq', 'potential', 'charge', 'specific charge density', 'capacitance', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1211, 'n', 'On increasing the length of a wire, specific resistance of the wire ', 'mcq', 'remains unchanged', 'increases', 'decreases', 'first increase then decrease', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1212, 'n', 'Internal resistance and emf of a cell can be determined by an instrument', 'mcq', 'potentiometer', 'CRO', 'AVO meter', 'a and b both', 'a and b both', 'potentiometer', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1213, 'n', 'If a unit charge experiences a force of 100N at a point in an electric field then electric field intensity will be', 'mcq', '100 N/C', '10 N/C', '16&times;10<sup>-19</sup> N/C', '10&times;10<sup>-19</sup> N/C', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1214, 'n', 'The resistance of a wire is 8&Omega;. the wire is stretched to double then new resistance in ohm will be', 'mcq', '32&Omega;', '16&Omega;', '2&Omega;', '24&Omega;', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1215, 'n', 'On moving a charge of 20C by 2cm, 2J of work is done, then the potential difference between the points is', 'mcq', '0.1V', '2V', '8V', '0.5V', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1216, 'n', 'A particle of mass m and charge q is released from rest in a uniform electric field E. The K.E. attained by the particle after moving a distance ''d'' is', 'mcq', 'qEd', 'Ed/q', 'qE<sup>2</sup>d', 'qE/d<sup>2</sup>', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1217, 'n', 'Negative and positive charges in a hollow sphere are equal in number then flux from the surface will be ', 'mcq', 'zero', 'positive', 'negative', 'flux may be either positive or negative', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1218, 'n', 'If there are n capacitors, each of capacity C, connected in parallel to V volts source, the energy stored is', 'mcq', '1/2 nV<sup>2</sup>C ', '1/2n CV<sup>2</sup>', 'CV', 'CV<sup>2</sup>', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1219, 'n', 'The colour code of 10&Omega; resistance with 5% tolerance is', 'mcq', 'brown, black, black, gold', 'black, black, brown, silver', 'black, brown, black, gold', 'brown, brown, black, gold', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1220, 'n', 'What would be the equivalence resistance of a circuit having three resistances of 9&Omega; each connected in parallel  ', 'mcq', '3&Omega;', '1&Omega;', '6&Omega;', '27&Omega;', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1221, 'n', 'If a charge q is placed at the center of line joining two equal charges Q such that the system is in equilibrium then the value of q is', 'mcq', '-Q/4', 'Q/2', 'Q/4', '-Q/2', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1222, 'n', 'Electric intensity inside a hollow charged conducting sphere is', 'mcq', 'zero', 'maximum', 'minimum', 'q / &epsilon;<sub>0</sub>', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1223, 'n', 'Resistivity of a conductor depends upon', 'mcq', 'temperature', 'nature of material', 'both a and b', 'temperature, length and nature', 'temperature, length and nature', 'both a and b', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1224, 'n', 'What is the force of attraction on a proton placed between two parallel plates containing equal positive charges', 'mcq', 'zero', '5&times;10<sup>-19</sup> N', '2.6&times;10<sup>-19</sup> N', '9&times;10<sup>-19</sup> N ', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1225, 'n', 'A sheet of aluminum foil of negligible thickness is introduced between the plates of a capacitor. The capacitance of the capacitor is', 'mcq', 'remains unchanged', 'increases', 'decreases', 'become infinite', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1226, 'n', 'Two plates are 1 cm apart and potential difference between them is 10V. The electric field between the plates is', 'mcq', '1000 NC<sup>-1</sup>', '10 NC<sup>-1</sup>', '500 NC<sup>-1</sup>', '250 NC<sup>-1</sup>', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1227, 'n', 'A voltage of 600V can be obtained virtually from ', 'mcq', 'head and tail of an eel', 'dry battery', 'nickel cadmium battery', 'transformer', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1228, 'n', 'Which one of the following correctly names two types of conductors in both of which the motion of positive ions contributes to the transfer of charge', 'mcq', 'liquid electrolytes and ionized gases', 'metals and liquid electrolytes', 'n-type semi conductor and liquid electrolytes', 'n-type semi conductor and ionized gases', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1229, 'n', 'Two capacitors of capacities C1 and C2 are connected in parallel. If a charge Q is given to the combination, the charge gets shared. The ratio of the charge on the capacitor C1 to that on C2 is  ', 'mcq', 'C1/C2', 'C1C2', 'C2/C1', 'C1+C2', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1230, 'n', 'A force of 0.01N is exerted on a charge 0.2&times;10<sup>-5</sup>C at a certain point. The electric field at that point is', 'mcq', '8.3&times;10<sup>2</sup>N/C', '5.3&times;10<sup>2</sup>N/C', '1.2&times;10<sup>4</sup>N/C', '8.3&times;10<sup>4</sup>N/C', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1231, 'n', 'A 5C charge experiences a force of 2000N when moved between two points separated by a distance of 2cm in a uniform electric field. The potential difference between the points is ', 'mcq', '8V', '800V', '200V', '20000V', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1232, 'n', 'A 6&micro;F capacitor is charged from 10 V to 20 V. Increase in energy will be', 'mcq', '9&times;10 <sup>-4</sup> J', '18&times;10 <sup>-4</sup> J', '9&times;10 <sup>-6</sup> J', '4.5&times;10 <sup>-4</sup> J', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1233, 'n', 'Gauss''s law is applicable by considering Gaussian surface. The Gaussian surface must has shape which is  ', 'mcq', 'any arbitrary closed', 'cylindrical', 'spherical', 'box type', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1234, 'n', 'A charge -4 &micro;C is at origin and +16 &micro;C is at a distance 3m on positive x-axis. The point where the electric intensity is zero is at', 'mcq', '3m along -ve x-axis', '3m along +ve y-axis', '3m along -ve y-axis', '1.5 along +ve x-axis', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1235, 'n', 'The capacity of a condenser is 4&times;10 <sup>-6</sup> farad and its potential is 100 volts. The energy released on discharging it fully will be ', 'mcq', '0.02 Joule', '0.025 Joule', '0.04 Joule', '0.05 Joule', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1236, 'n', 'Electric intensity between two same charged parallel plates is ', 'mcq', 'zero', '&sigma;/&epsilon;<sub>0</sub>', '&sigma;/2&epsilon;<sub>0</sub>', '2&sigma;/&epsilon;<sub>0</sub>', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1237, 'n', 'By increasing the temperature the specific resistance of a conductor and a semi conductor', 'mcq', 'increases, decreases', 'increases for both', 'decreases for both', 'decreases, increases', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1238, 'n', 'Capacitance of a capacitor does not depend upon', 'mcq', 'thickness of the plates', 'separation between plates', 'area of the plates', 'medium between the plates', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1239, 'n', 'Two metallic spheres of radius 1cm and 2cm get equal quantity of charge. Which has greater surface charge density', 'mcq', '1st Sphere', '2nd Sphere', 'both', 'none of these', '##', 'none of these', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1240, 'n', 'Neutral zone in electric field of two similar charges is a region where', 'mcq', 'no electric field line passes', 'both positive and negative charges present', 'equal quantity of both positive and negative charges present', 'an electric dipole exists', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1241, 'n', 'Two resistances 4&Omega; and 6&Omega; are in series. They are in parallel with 10&Omega; resistance. The equivalent resistance is  ', 'mcq', '5&Omega;', '12&Omega;', '8&Omega;', '20&Omega;', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1242, 'n', 'Which of the following gives volt as its unit ', 'mcq', 'emf of a cell', 'power&times;current', 'current / resistance', 'rate of flow of charge', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1243, 'n', 'A wire when connected to 220V mains supply has power dissipation P<sub>1</sub>. Now the wire is cut into two equal parts which are connected in parallel to the same supply. Power dissipation in this case is P<sub>2</sub> . Then P<sub>2</sub>:P<sub>1</sub> is', 'mcq', '4', '1', '2', '3', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1244, 'n', 'Which of the following has negative temperature coefficient of resistance', 'mcq', 'silicon', 'iron', 'copper', 'tungsten', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1245, 'n', 'Zero ohm resistor is indicated by', 'mcq', 'one black strip', 'three black strips', 'two black strips', 'all are correct', '##', 'all are correct', NULL, 00056, 0);
INSERT INTO `questions` VALUES(1246, 'n', 'Two charged particles are projected into a region where there is a magnetic field along z-axis perpendicular to their velocities. If the charges are deflected in opposite directions, what can you say about them?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1247, 'n', 'Suppose that a charge q is moving in a uniform magnetic field with a velocity v. Why is there no work done by the magnetic force that acts on the charge q?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1248, 'n', 'If a charged particle moves in a straight line through some region of space, can you say that the magnetic field in the region is zero?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1249, 'n', 'Why does the picture on a screen become distorted when a magnet is brought near the screen?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1250, 'n', 'Is it possible to orient a current loop in a uniform magnetic field such that the loop will not tend to rotate? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1251, 'n', 'How can a current loop be used to determine the presence of a magnetic field in a given region of space?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1252, 'n', 'How can you use a magnetic field to separate isotopes of a chemical element', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1253, 'n', 'What should be the orientation of a current carrying coil in a magnetic field so that torque acting upon the coil is \r\na) maximum\r\nb) minimum', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1254, 'n', 'A loop of wire is suspended between the poles of a magnet with its plane parallel to the pole faces. What happens if a direct current is put through the coil? What happens if an alternating current is ed instead?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1255, 'n', 'Why the resistance of an ammeter should be very low?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1256, 'n', 'Why the voltmeter should have a very high resistance?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(1257, 'n', 'When the primary of a transformer is connected to a.c mains the current in it \r\na) is very small if the secondary circuit is open, but\r\nb) increases when the secondary circuit is closed. Explain these facts.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00058, 0);
INSERT INTO `questions` VALUES(1258, 'n', 'A sinusoidal current has rms value of 10A. What is the maximum or peak value?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1259, 'n', 'Name the device that will \r\na) permit flow of direct current but oppose the flow of alternating current\r\nb) permit flow of alternating current but oppose the flow of direct current', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1260, 'n', 'How many times per second will an incandescent lamp reach maximum brilliance when connected to a 50Hz source?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1261, 'n', 'A circuit contains an iron-cored inductor,a switch and a D.C source arranged in series. the switch is closed and after an interval reopened.Explain why a spark jumps across the switch contacts? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1262, 'n', 'How does doubling the frequency affect the reactance of (a)an inductor (b)a capacitor?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1263, 'n', 'in R-L series circuit will the current lag or lead the voltage? Illustrate your answer by a vector diagram.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1264, 'n', 'A choke coil placed in series with an electric lamp in an A.C circuit causes the lamp to become dim. Why is it so?A variable capacitor added in series in this circuit may be adjusted until the lamp glows with normal brilliance. Explain,how this is possible?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1265, 'n', 'Explain the conditions under which electromagnetic waves are produced from a source?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1266, 'n', 'How the reception of a particular radio station is selected on your radio set?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1267, 'n', 'What is meant by A.M and F.M?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(1268, 'n', 'اجسام کی حرکت کا مطالعہ کیا جاتا ہے', 'mcq', 'مکینیکس میں', 'کائنی میٹکس میں', 'ڈائنامکس میں', 'ایکوی لیبریم میں', '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(1269, 'n', 'مکینکس کے حصے ہیں', 'mcq', 'دو', 'چار', 'تین', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00039, 0);
INSERT INTO `questions` VALUES(1270, 'n', 'The value of &epsilon;<sub>0</sub> for free space is', 'mcq', '8.85&times;10<sup>-12</sup> C<sup>2</sup>N<sup>-1</sup>m<sup>-2</sup>', '9&times;10<sup>9</sup> Nm<sup>2</sup>C<sup>2</sup>', '10<sup>-6</sup> CN<sup>-1</sup>m<sup>-2</sup>', '1', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1271, 'n', 'The minimum charge on any object cannot be less than', 'mcq', '1.6&times;10<sup>-19</sup>C', '3.2&times;10<sup>-19</sup>C', '1.8&times;10<sup>-19</sup>C', '9.1&times;10<sup>-19</sup>C', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1272, 'n', 'The electric force between two charges placed in air is 2N. When placed in a medium with &epsilon;<sub>r</sub>=80, the force reduces to', 'mcq', '0.025', '0.029', '0.019', '0.03', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1273, 'n', 'Distinguish between crystalline, amorphous, and polymeric solids.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1274, 'n', 'Define stress and strain.  What are their SI units.?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1275, 'n', 'Differentiate between tensile, compressive and shear modes of stress and strain', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1276, 'n', 'Define modulus of elasticity. Show that the units of modulus of elasticity and stress are the same.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1277, 'n', 'Discuss three kinds of modulus of elasticity.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1278, 'n', 'Draw a stress-strain curve for a ductile material and define the terms elastic limit, yield point and ultimate tensile stress', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1279, 'n', 'What is meant by strain energy? How it can be determined from the force-extension graph?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1280, 'n', 'Describe the formation of energy bands in solids. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1281, 'n', 'Explain the difference amongst electrical behavior of conductors, insulators and semi-conductors in the light of energy band theory.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1282, 'n', 'Distinguish between intrinsic and extrinsic semi-conductors. How would you obtain n-type and p-type material from pure silicon? Illustrate it by schematic diagrams.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1283, 'n', 'If 13.6 eV energy is required to ionize the hydrogen atom, then energy required to remove an electron from n=2 is', 'mcq', '3.4 eV', '10.2 eV', '0 ev', '6.8 eV', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1284, 'n', 'The speed of electron in the first orbit of hydrogen atom is', 'mcq', '2.2&times;10<sup>6</sup>ms<sup>-1</sup>', '5.2&times;10<sup>6</sup>ms<sup>-1</sup>', '4.2&times;10<sup>6</sup>ms<sup>-1</sup>', '6.2&times;10<sup>6</sup>ms<sup>-1</sup>', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1285, 'n', 'If N<sub>0</sub> is the original mass of the substance of half life period t<sub>1/2</sub> = 5 years, then the amount of substance left after 15 years is', 'mcq', 'N<sub>0</sub>/8', 'N<sub>0</sub>/2', 'N<sub>0</sub>/16', 'N<sub>0</sub>/4', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1286, 'n', 'A high energy &alpha;-particles collides with <sup>14</sup><sub>7</sub> N nucleus to produce a <sup>17</sup><sub>8</sub> O nucleus, what could be the other products of the collision? ', 'mcq', 'a &gamma;-photon and a proton', 'a &gamma;-photon and a neutron', 'a &gamma;-photon alone', 'a &gamma;-photon and &beta;-particle', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1287, 'n', 'which of the following is highly penetrating?', 'mcq', '&gamma;-rays', 'x-rays', '&beta;-particles', '&alpha;-particles', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1288, 'n', 'The initial activity of radioactive isotope containing N<sub>0</sub> nuclei is A<sub>0</sub>, what is the number of unchanged nuclei when the activity has declined to A<sub>0</sub>/2 ', 'mcq', 'N<sub>0</sub>/2', '0.69N<sub>0</sub>', '0.69N<sub>0</sub>/2', 'N<sub>0</sub>/0.38', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1289, 'n', 'The half life of a radioactive element is 1500 years, the fraction of sample that would survive after 6000 years is', 'mcq', '1/16', '1/2', '1/8', '1/4', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1290, 'n', 'Neutron penetrate because they are', 'mcq', 'neutral', 'fast moving', 'equal mass to protons', 'all of these', '##', 'all of these', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1291, 'n', 'Which of the following is true for the &gamma;-rays', 'mcq', 'Charge:neutral, Rest mass:zero', 'Charge:neutral, Rest mass:m<sub>0</sub>c<sup>2</sup>', 'Charge:positive, Rest mass:m<sub>0</sub>c<sup>2</sup>', 'Charge:negative, Rest mass:zero', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1292, 'n', 'The ratio of the specific charge e/m of the proton to that of an &alpha;-particle is', 'mcq', '2:1', '1:2', '1:4', '4:1', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1293, 'n', 'In the Bohr model of the hydrogen atom, the lower orbit corresponds to  ', 'mcq', 'minimum energy', 'infinite energy', 'maximum energy', 'zero energy', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1294, 'n', 'When an electron in an atom goes from a lower to a higher orbit, then', 'mcq', 'K.E decreases, P.E increases', 'K.E increases, P.E increases', 'K.E decreases, P.E decreases', 'K.E increases, P.E decreases', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1295, 'n', 'The ratio of life time of a metastable exited state to the life time of the normal exited state is', 'mcq', '10<sup>5</sup>:1', '10<sup>3</sup>:1', '10<sup>8</sup>:1', '10<sup>4</sup>:1', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1296, 'n', 'The radioactive nuclide <sup>228</sup> <sub>86</sub> Ra decays by a series of emission of three &alpha;-particles and one &beta;-particle. The nuclide X finally formed is ', 'mcq', '<sup>216</sup> <sub>83</sub> X', '<sup>220</sup> <sub>84</sub> X', '<sup>222</sup> <sub>86</sub> X', '<sup>215</sup> <sub>86</sub> X', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1297, 'n', 'Discuss the mechanism of electrical conduction by holes and electrons in a pure semi-conductor element. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1298, 'n', 'Write a short note on super conductors.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1299, 'n', 'What is meant by para, dia and ferromagnetic substances? Give examples for each.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1300, 'n', 'What is meant by hysteresis loss? How it be used in the construction of a transformer? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00060, 0);
INSERT INTO `questions` VALUES(1301, 'n', 'How dos the motion of an electron in an n-type substance differs from the motion of holes in a p-type substance?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1302, 'n', 'What is the net charge on a n-type or a p-type substance?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1303, 'n', 'The anode of a diode is 0.2V positive with respect to its cathode. Is it forward biased?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1304, 'n', 'Why charge carriers are not present in the depletion region?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1305, 'n', 'What is the effect of forward reverse biasing of a diode on the width of a depletion region?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1306, 'n', 'Why ordinary silicon diodes do not emit light?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1307, 'n', 'Why a photo diode is operated in reverse biased state?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1308, 'n', 'Why is the base current in a transistor very small?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1309, 'n', 'What are the biasing requirements of the junctions of a transistor for its normal operation? Explain how these requirements are met in a common emitter amplifier?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1310, 'n', 'What is the principal of virtual ground? Apply it to find the gain of an inverting amplifier.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(1311, 'n', 'What are the measurements on which two observers in relative motion will always agree upon?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1312, 'n', 'Does the dilation mean that time really passes more slowly in moving system or that it only seems to pass more slowly?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1313, 'n', 'If you are moving in a spaceship at a very high speed relative to the Earth, would you notice a difference a) in your pulse rate b) in the pulse rate of people on Earth?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1314, 'n', 'If the speed of light wave infinite, what would the equations of special theory of relativity reduce to?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1315, 'n', 'Since mass is a form of energy, can we conclude that a compressed spring has more mass than the same spring when it is not compressed?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1316, 'n', 'As a solid is heated and begins to glow, why does it first appear red?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1317, 'n', 'What happens to total radiation from a black body if its absolute temperature is doubled?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1318, 'n', 'A beam of red light and a beam of blue light have exactly the same energy. Which beam contains the greater number of photons?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1319, 'n', 'Which photon red, green or blue carries the most a) energy and b) momentum', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1320, 'n', 'Which has the lower energy quanta? Radio waves or x-rays.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1321, 'n', 'Does the brightness of a beam of light primarily depends upon the frequency of photons or on the number of photons?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1322, 'n', 'When ultraviolet light falls on certain dyes, visible light is emitted. Why does this not happen in case of infrared light?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1323, 'n', 'Will bright light eject more electrons from a metal surface than dimmer light of the same colour?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1324, 'n', 'Will higher frequency light eject greater number of electrons than a low frequency light?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1325, 'n', 'When light shines on a surface, is momentum transferred to the metal surface?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1326, 'n', 'Why can red light be used in a photographic dark room when developing films but a blue or white light can not?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1327, 'n', 'Photon A has twice the energy of photon B. What is the ratio of the momentum of A to that of B?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1328, 'n', 'Why don''t we observe a compton effect with visible light? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1329, 'n', 'Can pair production take place in vacuum? explain?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1330, 'n', 'Is it possible to create a single electron from energy? ecplain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00062, 0);
INSERT INTO `questions` VALUES(1331, 'n', 'The ratio of the K.E and total energy of the electron in the hydrogen atom according to the Bohr''s theory, is', 'mcq', '1:-1', '1:2', '1:1', '1:-2', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1332, 'n', 'Which of the following can not be emitted by radioactive substances during their decays.', 'mcq', 'protons', 'electrons', 'neutrinoes', 'helium nuclei', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1333, 'n', 'The Balmer series is found in the spectrum of ', 'mcq', 'hydrogen', 'oxygen', 'nitrogen', 'all', '##', 'all', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1334, 'n', 'Which of the following atoms has the lowest ionization potential?', 'mcq', '<sub>55</sub>Cs<sup>133</sup>', '<sub>8</sub>O<sup>16</sup>', '<sub>7</sub>N<sup>14</sup>', '<sub>18</sub>Ar<sup>40</sup>', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1335, 'n', 'A nuclear transformation is denoted by X(n,&alpha;) 7/3 Li. Which of the following is the nucleus of element X?', 'mcq', '<sub>5</sub>B<sup>10</sup>', '<sub>4</sub>Be<sup>11</sup>', '<sub>5</sub>B<sup>9</sup>', '<sub>6</sub>C<sup>12</sup>', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1336, 'n', 'The quantity h/m<sub>0</sub>c, with m<sub>0</sub> the electron mass, has the dimension of', 'mcq', 'length', 'momentum', 'energy', 'time', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1337, 'n', 'The concept of the nuclear atom was established from experiments on the ', 'mcq', 'scattering of &alpha;-particles by metal foils', 'emission of electrons from metal surfaces', 'diffraction of electrons by crystals', 'discharge of electricity through gases', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1338, 'n', 'Spectroscopy is a branch of physics which deals with the study of ..... electromagnetic radiation', 'mcq', 'all of these', 'absorption', 'emission', 'wavelength', '##', 'all of these', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1339, 'n', 'The ratio of the longest and shortest wavelength of the Lyman series is approximately', 'mcq', '4/3', '9/4', '9/5', '16/7', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1340, 'n', 'According to Bohr''s theory, a line in the Balmer series arises when the electron jumps from any of the higher orbits to the orbit with quantum number', 'mcq', '2', '1', '3', '4', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1341, 'n', 'Which of the following statement is true?', 'mcq', 'An atom can not emit energy while it is in its ground state', 'the energy of an electron bound in an atom is zero', 'the electron in an atom emits energy in quantum jumps but absorbs energy continuously', 'an atom can not absorb energy while it is in the ground state', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1342, 'n', 'Bottom quark carries charge ', 'mcq', '- 2/3 e', '+ 2/3 e', '- 1/3 e', '+ 1/3 e', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1343, 'n', 'To find longest wavelength radiation in Balmer series, the value of n used is', 'mcq', '3', '2', '4', '&infin;', '##', '&infin;', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1344, 'n', 'To find shortest wavelength in Paschan series, the value of n used is', 'mcq', '&infin;', '2', '4', '5', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1345, 'n', 'Target material used in x-ray tube must have following properties', 'mcq', 'high atomic number and high melting point', 'high atomic number and low melting point', 'low atomic number and low melting point', 'high atomic number only', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1346, 'n', 'frequency of x-rays depends upon', 'mcq', 'both accelerating potential and nature of target material', 'no. of electron striking the target ', 'accelerating potential', 'nature of the target material', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1347, 'n', 'To ionize hydrogen atom from its ground state, energy required is', 'mcq', '13.6 ev', '+3.4', '-13.6 ev', '-3.4 ev', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1348, 'n', 'If the electron in the hydrogen atom jumps from the third orbit to second orbit, the emitted radiation has wavelength', 'mcq', '36/5 R', '5/36 R', '6/5 R', '5 R/6', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1349, 'n', 'Under lying principle of laser operation is', 'mcq', 'stimulated emission', 'induced absorption', 'spontaneous emission', 'all', '##', 'all', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1350, 'n', 'For atomic nuclei, the binding energy per nucleon', 'mcq', 'first increases and then decreases with increase in mass number', 'increases continuously with increase in mass number', 'decreases continuously with increase in mass number', 'remains constant with increase in mass number', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1351, 'n', 'A radio active substance has a half life of 4 months. 3/4th of the substance will decay in', 'mcq', '8 months', '6 months', '16 months', '12 months', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1352, 'n', 'The velocity of electron revolving hydrogen atom nucleus is directly proportional to (n=principle quantum number)', 'mcq', 'n', 'n<sup>2</sup>', '1/n', '1/n<sup>2</sup>', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1353, 'n', 'Which of the following basic forces is able to provide an attraction between two neutrons', 'mcq', 'gravitational and strong nuclear', 'only nuclear force', 'electrostatic and nuclear', 'electrostatic and gravitational', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1354, 'n', 'In order to separate isotopes of an element which method is used ', 'mcq', 'physical', 'chemical', 'both a and b', 'none', 'both a and b', 'none', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1355, 'n', 'Circulation of blood can be studied by', 'mcq', 'sodium-24', 'strontium-90', 'carbon-14', 'Iodine-131', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1356, 'n', 'Mass equivalent of 931 Mev energy is', 'mcq', '1.66&times;10<sup>-27</sup>kg', '6.02&times;10<sup>-27</sup>kg', '6.02&times;10<sup>-23</sup>kg', '1.67&times;10<sup>-27</sup>kg', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1357, 'n', 'A radioactive material with half life 1.0 minute. If one of the nuclei decay now, the next will decay after?', 'mcq', 'any time', '1.0 minute', '1/ log<sub>e</sub>2 minutes', '1/N minutes where N is the nuclei present', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1358, 'n', 'The mass defect per nucleon is called as', 'mcq', 'packing fraction', 'excitation energy', 'binding energy', 'ionization energy', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1359, 'n', 'Which of the following conservation laws hold in nuclear transmutation', 'mcq', 'all of these', 'mass', 'energy', 'momentum', '##', 'all of these', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1360, 'n', 'When a radio active element emits an &alpha;-particle then its', 'mcq', 'mass number decreases by four and atomic number decreases by two', 'mass number decreases by two and atomic number decreases by two', 'both mass number and atomic number remain same', 'mass number remains same and atomic number decreases by two', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1361, 'n', '&gamma;-radiation are emitted due to', 'mcq', 'de-exitation of nucleus', 'excitation of nucleus', 'de-exitation of atom', 'exitation of atom', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1362, 'n', 'Unit of decay constant &lambda; is', 'mcq', 's<sup>-1</sup>', 'm<sup>-1</sup>', 'ms', 'm', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1363, 'n', 'Half life of a radioactive substance depends upon', 'mcq', 'nature of substance', 'how old the substance is', 'amount of substance', 'all', '##', 'all', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1364, 'n', 'Interaction of nuclear radiation with matter depends upon', 'mcq', 'all', 'mass of the particle', 'charge of the particle', 'energy of the particle', '##', 'all', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1365, 'n', 'The energy equivalent of 1 kg of matter is about', 'mcq', '1 J', '10<sup>17</sup> J', '10<sup>-15</sup> J', '10<sup>-12</sup> J', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1366, 'n', 'If energy of &gamma; radiation is less than 0.5 Mev, the dominant process is ', 'mcq', 'photo electric effect', 'pair production', 'compton''s effect', 'black body radiation', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1367, 'n', 'Which of the following radiation have thick and straight path in Wilson cloud chamber ', 'mcq', '&alpha;-particle', '&beta;-particle', '&gamma;-rays', 'all', '##', 'all', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1368, 'n', 'In GM-counter, the potential difference applied between anode and cathode is', 'mcq', 'slightly less than that required to produce discharge', 'slightly greater than that required to produce discharge', 'equal to that required to produce discharge', 'much greater than that required to produce discharge', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1369, 'n', 'Dead time of GM-counter is approximately', 'mcq', '10<sup>-4</sup>c', '10<sup>-6</sup>c', '10<sup>-5</sup>c', '10<sup>-3</sup>c', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1370, 'n', 'Which of the following detector is suitable for fast counting', 'mcq', 'solid state detector', 'wilson cloud chamber', 'GM counter', 'All', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1371, 'n', 'In solid state detector, p-n junction is operated under ', 'mcq', 'reverse bias', 'forward bias', 'no bias at all', 'reverse bias for small energy and no bias for large', '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1372, 'n', 'In which of the following detectors, the size of the pulse is independent of energy of particles', 'mcq', 'GM-counter', 'solid state detector', 'none', 'both', 'both', 'none', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1373, 'n', 'Bohr''s theory of hydrogen atom is based upon several assumptions. Do any of these assumptions contradict classical physical?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1374, 'n', 'What is meant by a line spectrum? How a line spectrum be used for the identification of elements?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1375, 'n', 'Can the electron in the ground state of hydrogen absorb a photon of energy 13.6 Mev and greater than 13.6 Mev?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1376, 'n', 'How can the spectrum of hydrogen contain so many lines when hydrogen contain one electron?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1377, 'n', 'Is energy conserved when an atom emits a photon of light? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1378, 'n', 'Explain why a glowing gas gives only certain wavelengths of light and why that gas is capable of absorbing the same wavelengths? Give a reason why it is transparent to other wavelengths?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1379, 'n', 'What do we mean when we say that the atom is exited?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1380, 'n', 'Can X-rays be reflected, refracted, diffracted, and polarized just like any other waves? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1381, 'n', 'What are the advantages of lasers over ordinary light?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1382, 'n', 'Explain why laser action could not occur without population inversion between atomic levels?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00063, 0);
INSERT INTO `questions` VALUES(1383, 'n', 'What are isotopes? What do they have common and what are their differences?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1384, 'n', 'Why are heavy nuclei unstable?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1385, 'n', 'If a nucleus has a half life of 1 year, does this mean that it will be completely decayed after 2 years? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1386, 'n', 'What fraction of a radioactive sample decays after two half lives have elapsed?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1387, 'n', 'The radioactive element <sup>226</sup><sub>88</sub>Ra has a half life of 6&times;10<sup>3</sup> years. Since the Earth is 5 billion years old, how can you explain why we still can find this element in nature?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1388, 'n', 'Describe a brief account of interaction of various types of radiations with matter.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1389, 'n', 'Explain how &alpha; and &beta;-particles may ionize an atom without directly hitting the electrons? What is the difference in the action of two particles for producing ionization?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1390, 'n', 'A particle which produces more ionization is less penetrating  why?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1391, 'n', 'What information is revealed by the length and shape of the tracks of an incident particle in Wilson Cloud chamber?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1392, 'n', 'Why must a GM counter for detecting &alpha;-particles have a very thin end window? Why does GM tube for detecting &gamma;-rays not need a window at all?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1393, 'n', 'Describe the principle of operation of a solid state detector of ionizing radiation in terms of generation and detection of charge carriers.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1394, 'n', 'What do you mean by the critical mass?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1395, 'n', 'Discuss the advantages and disadvantages of nuclear power compared to the use of fossil fuel generated power.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1396, 'n', 'What factors make a fusion reaction difficult to achieve?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1397, 'n', 'Discuss the advantages and disadvantages of fusion power  from the point of safety, pollution and resources.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1398, 'n', 'What do you understand by ''background radiation''? State two sources of this radiation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1399, 'n', 'If you swallowed an &alpha;-source and a &beta;-source, which would be the more dangerous to you? Explain why?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1400, 'n', 'Which radiation dose would deposit more energy by your body, a)10mGy to your hand b)1mGy to your entire body ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1401, 'n', 'What is a radioactive tracer? Describe one application each in medicine, agriculture and industry.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1402, 'n', 'How can radioactivity help in the treatment of cancer?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00064, 0);
INSERT INTO `questions` VALUES(1403, 'n', 'Is coulomb''s electrostatic interaction consistent with Newton''s third law?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1404, 'n', 'How would you show that the electrostatic force on a charged object is independent of its mass?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1405, 'n', 'If the distance between two point charges is halved, what will happen to the force between them?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1406, 'n', 'Can two equipotential surfaces intersect each other? Explain. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1407, 'n', 'If the absolute potential at a point is zero, what can you say about the electric intensity there?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1408, 'n', 'What will be the flux through a surface placed at right angle to the electric field?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1409, 'n', 'What will be the flux through a closed surface which does not contain any charge?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1410, 'n', 'Gauss''s law has been derived by assuming that the charge enclosed by a closed surface is positive. If q is negative, what will happen to the field lines?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1411, 'n', 'What is the difference between electric potential energy and electric potential difference?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1412, 'n', 'Is electron volt a unit of potential difference or energy? Explain.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1413, 'n', 'Convert joule to electron volt.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1414, 'n', 'Will the energy stored in three capacitors be greater when they are connected in series or in parallel?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1415, 'n', 'Explain briefly the term ''potential gradient''.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1416, 'n', 'What is time constant of a capacitor?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1417, 'n', 'Prove that 1Volt/meter = 1 newton/coulomb', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1418, 'n', 'What is electric intensity? Give its SI unit.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1419, 'n', 'Define electric flux and give its mathematical expression.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1420, 'n', 'Show that RC = t', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1421, 'n', 'Can there be a potential difference between two conductors that carry like charges of the same magnitude? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1422, 'n', 'Define capacitance of a capacitor with its unit.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1423, 'n', 'How can we shield any apparatus from electric field?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(1424, 'n', 'What is the information we get out from the computer called?', 'mcq', 'output', 'input', 'storage', 'data', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1425, 'n', 'What are the devices used to store information called?', 'mcq', 'storage devices', 'input devices', 'output devices', 'communication devices', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1426, 'n', 'Which of the following is permanent memory?', 'mcq', 'ROM', 'RAM', 'Modem', 'CPU', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1427, 'n', 'Which of the following is not an output device? ', 'mcq', 'Scaner', 'Printer', 'Monitor', 'Speaker', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1428, 'n', 'Which of the following is a reliable storage device to take data from one computer to the other?', 'mcq', 'USB Flash Memory', 'RAM', 'Hard Disk', 'Floppy Disk', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1429, 'n', 'Which of the following devices produce softcopy output?', 'mcq', 'Monitor', 'Scanner', 'Mouse', 'Printer', '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1430, 'n', 'Explain the term ''Information'' by giving one example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1431, 'n', 'Which are the features that make computer advantageous to us?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1432, 'n', 'Differentiate between hardware and software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1433, 'n', 'What is the purpose of using output devices?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1434, 'n', 'How can we enter data into the computer?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1435, 'n', 'Write few advantages of using storage devices.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1436, 'n', 'Write short note on Hard Disk.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1437, 'n', 'Write short note on CD/DVD.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1438, 'n', 'Write short note on Keyboard.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1439, 'n', 'Write short note on Mouse.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1440, 'n', 'Write short note on Scanner.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1441, 'n', 'Write short note on Digital Camera.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1442, 'n', 'Differentiate between ''output'' and ''processing'' operations.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1443, 'n', 'Write short note on Modem.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1444, 'n', 'What is the purpose of using ''communication devices''?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1445, 'n', 'What is computer? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1446, 'n', 'What is data? Give some examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1449, 'n', 'Differentiate RAM and ROM.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1447, 'n', 'Why USB Flash Memory is very popular now a days?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1450, 'n', 'What are the categories of computer hardware components?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1451, 'n', 'What is the use of microphone?', 'sq', 'A microphone is an input device that is used to input human voice or any other sound to the computer.', NULL, NULL, NULL, '##', '##', NULL, 00067, 0);
INSERT INTO `questions` VALUES(1452, 'n', 'Define operating system. Give some examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1453, 'n', 'What is GUI?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1454, 'n', 'Name the bar on a program window that contains shortcut icons to various commands/options.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1455, 'n', 'Which are of the desktop is used to adjust date/time of the system?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1456, 'n', 'What is the purpose of ''My Documents'' Folder?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1457, 'n', 'Define File. Give an example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1458, 'n', 'Define Folder. Give an example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1459, 'n', 'Define Drive. Give an example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1460, 'n', 'Give few advantages of ''Recycle Bin'' folder.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1461, 'n', 'Name any three menus on the Menu Bar of a program window.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1462, 'n', 'What is a Window? Give one example from your operating system used.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1463, 'n', 'Explain the purpose of control buttons in a program window.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1464, 'n', 'Why extension is used with a file name?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1465, 'n', 'Differentiate Copy/paste and Cut/paste procedures.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1466, 'n', 'Define Logging on.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1467, 'n', 'Define User Name.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1468, 'n', 'Define Recycle Bin.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1469, 'n', 'Define Notification area.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1470, 'n', 'Define Password.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1471, 'n', 'Which of the following input device plays an important role using windows?', 'mcq', 'Mouse', 'Joystick', 'Scanner', 'Printer', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1472, 'n', 'What does appear on the monitor when windows is logged on?', 'mcq', 'Desktop', 'Document', 'File', 'Taskbar', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1473, 'n', 'Where is the start button normally located on the desktop?', 'mcq', 'Bottom left corner', 'Bottom right corner', 'Top left corner', 'Top right corner', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1474, 'n', 'What is a small pictorial object that represents a program called?', 'mcq', 'Icon', 'File', 'Folder', 'Picture', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1475, 'n', 'Which is a default folder that stores all deleted files in windows?', 'mcq', 'Recycle Bin', 'My Documents', 'My Computer', 'Empty Box', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1476, 'n', 'Which bar contains name of the current program at its left side and control buttons at its right?', 'mcq', 'Title bar', 'Status bar', 'Toolbar', 'Menu bar', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1477, 'n', 'Which button is used to reduce the window to a button on the taskbar?', 'mcq', 'Minimize', 'Maximize', 'Start', 'Close', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1478, 'n', 'What is the collection of related information called?', 'mcq', 'A File', 'A Folder', 'A Menu', 'A Window', '##', '##', NULL, 00068, 0);
INSERT INTO `questions` VALUES(1479, 'n', 'Which tool is used in Paint to draw multiple types of polygons?', 'mcq', 'Polygon', 'Line', 'Ellipse', 'Rectangle', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1480, 'n', 'Which curly line indicates spelling mistake in a Word Document?', 'mcq', 'Red', 'Black', 'Green', 'Blue', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1481, 'n', 'Which of the follwoing program has ''Flip/Rotate'' feature?', 'mcq', 'Paint', 'Typing Tytor', 'Word', 'Windows', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1482, 'n', 'Which finger is used to press key ''F''?', 'mcq', 'Left index', 'Left middle', 'Thumb', 'Right index', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1483, 'n', 'In Word, which toolbar icon is used to print a full document?', 'mcq', 'Save Icon', 'Print Icon', 'Copy Icon', 'Open Icon', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1484, 'n', 'In Word, which menu offers the ''New'' command?', 'mcq', 'File', 'Edit', 'View', 'Format', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1485, 'n', 'In Word, which aligning text option aligns the text from both sides?', 'mcq', 'Justified', 'Right Align', 'Center Align', 'Left Align', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1486, 'n', 'In Word, which of the following short cut is used to copy text from a document?', 'mcq', 'Ctrl + C', 'Ctrl + P', 'Ctrl + V', 'Ctrl + X', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1487, 'n', 'Which program is used to play audio/video files?', 'mcq', 'Media Player', 'Word', 'Typing Tutor', 'Paint', '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1488, 'n', 'Which Mouse button is used to select foreground colour from the colour box?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1489, 'n', 'What is the function of eraser tool?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1490, 'n', 'Why we press and hold Shift key to draw a line?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1491, 'n', 'Name the tool to draw curves and arcs.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1492, 'n', 'Which software is used to create drawings? ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1493, 'n', 'Write few advantages of using typing tutor program.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1494, 'n', 'Write down benefits of using Word software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1495, 'n', 'What is text editing? Name few text editing techniques used in Word.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1496, 'n', 'Explain the difference between Cut-Paste and Copy-Paste commands in Word.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1497, 'n', 'How Word program indicates any grammatical mistake in a document?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1498, 'n', 'What is the difference between ''Save'' and ''Save As'' command used in Paint?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00069, 0);
INSERT INTO `questions` VALUES(1499, 'n', 'Define System Unit.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1500, 'n', 'Define memory. Name its types.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1501, 'n', 'Define Processor. Name its parts.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1502, 'n', 'Define Barcode Reader.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1503, 'n', 'Define Motherboard.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1504, 'n', 'Differentiate Hardware and Software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1505, 'n', 'Differentiate AU and LU.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1506, 'n', 'Differentiate RAM and ROM.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1507, 'n', 'Differentiate Expansion Slots and Expansion Cards.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1508, 'n', 'Differentiate Input Devices and Output Devices.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1509, 'n', 'What are the main functions of ALU?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1510, 'n', 'What is Read Only Memory?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1511, 'n', 'Write down three main usages of Fingerprint Reader. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1512, 'n', 'What is the main function of Robot?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1513, 'n', 'How many Expansion Slots are there in computer? Name them.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1514, 'n', 'Write the names of major expansion cards and discuss one of them.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1515, 'n', 'What information is gathered from barcode?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1516, 'n', 'What is cutting edge technology? Give examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1517, 'n', 'Why RAM is called volatile?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1518, 'n', 'Write the procedure to check the Processor speed and memory size.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1519, 'n', 'Define Software. Give examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1520, 'n', 'Define Utility Program. Give examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1521, 'n', 'Define Disk Drivers.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1522, 'n', 'Define File Manager.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1523, 'n', 'Define Disk Scanner.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1524, 'n', 'Differentiate File Manager and Image Viewer.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1525, 'n', 'Differentiate Application Software and System Software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1526, 'n', 'Differentiate Entertainment Software and Education Software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1527, 'n', 'Differentiate Word Processing and Spreadsheet.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1528, 'n', 'Differentiate Device Drivers and Utilities.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1529, 'n', 'What is an Operating System?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1530, 'n', 'List any five Application Software Names.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1531, 'n', 'What are the Utility Programs?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1532, 'n', 'Write down the basic operations of the Operating System.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1533, 'n', 'Can a device work without a Device Driver? Give Reason.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1534, 'n', 'What is the name and working of a Windows Image Viewer?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1535, 'n', 'How can a user delete unnecessary files from the Computer?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1536, 'n', 'List any three Productivity Software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1537, 'n', 'Write the procedure to use Disk Cleanup Utility in Windows.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1538, 'n', 'Write three uses of Word Processing.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1539, 'n', 'Write three uses of Spreadsheet.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1540, 'n', 'Write three uses of Graphics.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1541, 'n', 'Write three uses of Multimedia.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1542, 'n', 'How can you install a device driver in Windows?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1543, 'n', 'Define Bullets. Where it should be used?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1544, 'n', 'Define Indentation. Give its purpose.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1545, 'n', 'Define Dialogue Box. Give its purpose.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1546, 'n', 'Define Draft View. Give its purpose.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1547, 'n', 'Define page Border. Give its purpose.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1548, 'n', 'Define Drag and Drop. In which situation it is used?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1549, 'n', 'Define Shading. What is its purpose?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1550, 'n', 'Define Section Break. Give its usage.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1551, 'n', 'Define Copy and Paste.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1552, 'n', 'Differentiate Cut and Copy.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1553, 'n', 'Differentiate Print Layout View and Web Layout View.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1554, 'n', 'Differentiate Header and Footer.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1555, 'n', 'Differentiate Zoom In and Zoom Out.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1556, 'n', 'Differentiate Page Break and Section Break.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1557, 'n', 'Differentiate Tab and Space.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1558, 'n', 'Differentiate Undo and Redo.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1559, 'n', 'Differentiate Alignment and Indentation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1560, 'n', 'Describe different Document Views in Word.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1561, 'n', 'What is meant by comment in Word document?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1562, 'n', 'How can we find the synonyms of a difficult word in Word?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1563, 'n', 'How can we insert date and time in a Word Document?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1564, 'n', 'What do you know about Font? Give three font names.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1565, 'n', 'What is an alignment? How many ways of text alignment in Word?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1566, 'n', 'Differentiate first line indent and hanging indent.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1567, 'n', 'Define Tab Stop and describe all styles of Tab Stop.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1568, 'n', 'How many Page Breaks are there in Word?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1569, 'n', 'Describe all the positions where page numbers can be inserted.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1570, 'n', 'Define Multimedia.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1571, 'n', 'Define Placeholder.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1572, 'n', 'Define Background.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1573, 'n', 'Define Animation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1574, 'n', 'Define Text with example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1575, 'n', 'Differentiate Gradient and Texture background Fill.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1576, 'n', 'Differentiate Graphics and Animation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1577, 'n', 'Differentiate Video Clip and Animation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1578, 'n', 'Differentiate Installed and My Templates.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1579, 'n', 'Differentiate Custom Animation and Slide Transition.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1580, 'n', 'Explain Elements of Multimedia.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1581, 'n', 'Define Slide and Slide Show.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1582, 'n', 'How can we fill background with different ways?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1583, 'n', 'Explain Slide Layout and its uses in a presentation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1584, 'n', 'What is Slide Transition?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1585, 'n', 'Describe Custom Animation.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1586, 'n', 'What is meant by collecting contents? Give an example.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1587, 'n', 'Write the procedure to fill background with a picture.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1588, 'n', 'Write the types of the templates.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1589, 'n', 'Define E-mail Account.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1590, 'n', 'Define E-mail Address.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1591, 'n', 'Define E-mail Service Provider.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1592, 'n', 'Define Sign In.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1593, 'n', 'Define Trash/Deleted folder.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1594, 'n', 'Differentiate Sender and Receiver in E-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1595, 'n', 'Differentiate Attach and Remove in E-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1596, 'n', 'Differentiate Username and Password in E-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1597, 'n', 'Differentiate Sign In and Sign Out in E-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1598, 'n', 'Differentiate E-mail Address and E-mail Account.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1599, 'n', 'How can you create a brand new E-mail Account?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1600, 'n', 'Write the components/parts of an E-mail Address.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1601, 'n', 'Write the procedure of composing and sending an E-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1602, 'n', 'Write down the names of different folders in an E-mail Account.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1603, 'n', 'What is Hotmail and Yahoo mail?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1604, 'n', 'How an E-mail is replied?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1605, 'n', 'What is the function of Cc: feature?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1606, 'n', 'Write the steps to delete an e-mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1607, 'n', 'How can we attach a file/photo with an e-mail?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1608, 'n', 'Write the web addresses of Hotmail and Yahoo mail.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1609, 'n', 'Sending and receiving messages and files electronically is known as....', 'mcq', 'E-mail', 'F-mail', 'H-mail', 'C-mail', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1610, 'n', 'Storage area or ''mailbox'' supplied by an e-mail service provider is called ...', 'mcq', 'E-mail account', 'Commercial account', 'Bank account', 'Inbox', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1611, 'n', '.... is a unique name chosen by a user while creating an e-mail.', 'mcq', 'Username', 'Subject', 'Password', 'Login', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1612, 'n', 'The name of the e-mail service provider comes after ... sign', 'mcq', '@', '*', '$', '#', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1613, 'n', 'Can two friends have same e-mail address?', 'mcq', 'No', 'Yes', 'May be', 'No idea', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1614, 'n', 'Cc: stands for ... ', 'mcq', 'Carbon Copy', 'Cool Copy', 'Can''t Copy', 'Cat Copy', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1615, 'n', 'Incoming messages are stored in a folder known as', 'mcq', 'Inbox', 'Mailbox', 'Post Box', 'Outbox', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1616, 'n', 'E-mails are arranged in Inbox with respect to', 'mcq', 'Date and Time', 'Names', 'Client and Server', 'Subject', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1617, 'n', 'All replied and sent e-mails are stored in a ... folder', 'mcq', 'Sent', 'Inbox', 'Trash/Deleted', 'Drafts', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1618, 'n', '... folder is used to store the deleted e-mails', 'mcq', 'Trash', 'Drafts', 'Sent', 'Junk', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1619, 'n', 'All outgoing messages are stored in ... folder', 'mcq', 'Sent', 'Drafts', 'Deleted', 'Inbox', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1620, 'n', '... means to close an e-mail account', 'mcq', 'Sign out', 'Sign in', 'Delete', 'Sign up', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1621, 'n', 'To answer a received e-mail is called .. an e-mail', 'mcq', 'Reply', 'Read', 'Write', 'Compose', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1622, 'n', '... is a keyboard short cut key to compose an e-mail', 'mcq', 'Ctrl + N', 'Ctrl + X', 'Ctrl + P', 'Ctrl + C', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1623, 'n', 'A user has to click on the ... button to create a new e-mail account.', 'mcq', 'Sign up', 'Sign in', 'Sign on', 'Sign out', '##', '##', NULL, 00075, 0);
INSERT INTO `questions` VALUES(1624, 'n', 'آجکل جدید کمپیوٹر کی سب سے عام قسم ہے۔', 'mcq', 'پرسنل کمپیوٹر', 'سپر کمپیوٹر', 'مین فریم کمپیوٹر', 'نوٹ بُک کمپیوٹر', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1625, 'n', 'کمپیوٹر کا سب سے بنیادی کام ہے۔', 'mcq', 'ڈیٹا کو معلومات میں تبدیل کرنا', 'معلومات کو ذخیرہ کرنا', 'ڈیٹا ظاہر کرنا', 'معلومات سے ڈیٹا اخذ کرنا', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1626, 'n', 'کس سائنسدان نے حساب کتاب میں آسانی کیلئے لوگرتھم جدول تیار کیا؟', 'mcq', 'جان نیپئر', 'وان نیومن', 'چارلس بابیج', 'جان ایکرٹ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1627, 'n', 'سب سے پیلا کمپیوٹر جس کے بارے میں چارلس بابیج نے سوچ بچار کی۔', 'mcq', 'اینالیٹیکل انجن', 'اینالوگ', 'پیٹرن', 'کوڈنگ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1628, 'n', 'Physical parts of a computer are known as', 'mcq', 'Hardware', 'Software', 'Operating System', 'System Unit', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1629, 'n', '... is a place where processing takes place.', 'mcq', 'CPU', 'Box', 'Monitor', 'System Unit', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1630, 'n', 'Processor is fixed on the ...', 'mcq', 'Motherboard', 'Fan', 'Chipboard', 'Expansion Slot', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1631, 'n', 'There are .... types of memory', 'mcq', 'two', 'three', 'one', 'four', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1632, 'n', 'A processor acts like a/an', 'mcq', 'Brain', 'Kidney', 'Arm', 'Heart', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1633, 'n', 'A processor is also known as ', 'mcq', 'CPU', 'UPC', 'UPS', 'PUS', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1634, 'n', 'Arithmetic operations are performed by', 'mcq', 'AU', 'LU', 'ALU', 'CU', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1635, 'n', 'Which of the following part of the CPU controls the sequence of the instructions?', 'mcq', 'CU', 'AU', 'LU', 'ALU', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1636, 'n', 'RAM stands for', 'mcq', 'Random Access Memory', 'Random Analysis Method', 'Random Available Memory', 'Read Able Memory', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1637, 'n', 'ROM stores data', 'mcq', 'Permanently', 'Temporarily', 'Partially', 'Fully', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1638, 'n', 'Which of the following is the highest speed slot?', 'mcq', 'AGP', 'ISA', 'PCI', 'APG', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1639, 'n', 'A video game is played by using ... card. ', 'mcq', 'Graphics', 'Network Interface', 'Modem', 'Sound', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1640, 'n', 'Barcode Reader is a/an ... device', 'mcq', 'Input', 'Output', 'Display', 'Storage', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1641, 'n', '.... is used in security system and criminal investigation', 'mcq', 'Fingerprint Reader', 'Robots', 'Sound Card', 'Barcode Reader', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1642, 'n', '... is also known as mechanical agent', 'mcq', 'Robot', 'Processor', 'Barcode Reader', 'Computer', '##', '##', NULL, 00071, 0);
INSERT INTO `questions` VALUES(1643, 'n', '... is a set of instructions given to the computer to perform a specific task.', 'mcq', 'Software', 'Hardware', 'Monitor', 'Printer', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1644, 'n', '.... creates a link between a user and the computer', 'mcq', 'Operating System', 'Device Driver', 'Utilities', 'Image Viewver', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1645, 'n', '... is the most famous type of operating system for personal computer.', 'mcq', 'Microsoft Windows', 'Mac OS', 'Unix', 'Linux', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1646, 'n', 'A system software that helps operating system to communicate with a device is called ', 'mcq', 'Device Driver', 'Utility', 'Graphics Software', 'Opearating System', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1647, 'n', '... is a program that allows a user to analyze and maintain a computer.', 'mcq', 'Utility', 'Device Driver', 'Windows XP', 'MS Office', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1648, 'n', 'Windows explorer serves as a ...', 'mcq', 'File Manager', 'Web Browser', 'Device Manager', 'System Manager', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1649, 'n', '... is utility program that provides a facility to view and manage images.', 'mcq', 'Image Viewver', 'Text Viewer', 'System Viewer', 'File Viewer', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1650, 'n', 'Disk Scanner in Windows is known as', 'mcq', 'Disk Cleanup', 'Disk Cleanout', 'Disk Cleaning', 'Disk Defragmenter', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1651, 'n', 'A computer software that helps users to do a specific task on a computer is known as ', 'mcq', 'application software', 'system software', 'MS office software', 'anti virus software', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1652, 'n', '... software are used to learn a particular skill', 'mcq', 'education', 'multimedia', 'graphics', 'reference', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1653, 'n', 'Computer game is an example of ... software ', 'mcq', 'entertainment', 'exam preparation', 'reference', 'system', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1654, 'n', 'Encyclopedia is an example of ... software', 'mcq', 'reference', 'productivity', 'educational', 'entertainment\r\n', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1655, 'n', '... software are used to create visual presentation ', 'mcq', 'Multimedia', 'MS Paint', 'MS Excel', 'Graphics', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1656, 'n', 'When a computer starts, operating system checks all the ... and loads their drivers so a user can work properly', 'mcq', 'devices', 'drivers', 'network', 'programs', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1657, 'n', '... is a world renowned composing software', 'mcq', 'MS Word', 'Typing Tutor', 'Ms Powerpoint', 'Adobe Photoshop', '##', '##', NULL, 00072, 0);
INSERT INTO `questions` VALUES(1658, 'n', 'Word is a type of ... software.', 'mcq', 'Application', 'Utility', 'Device Driver', 'System', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1659, 'n', '... view is the best way to see the work in Word.', 'mcq', 'Print Layout', 'Full Screen Reading', 'Draft', 'Outline', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1660, 'n', 'A user can view different areas of a long document by ... a document.', 'mcq', 'Splitting', 'Cutting', 'Breaking', 'Clipping', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1661, 'n', 'Delete key deletes letters from the ... side', 'mcq', 'right', 'up', 'down', 'left', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1662, 'n', 'Undo feature is used to ... last change made in the document.', 'mcq', 'discard', 'store', 'update', 'save', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1663, 'n', 'Word shows the document information (total pages, words) on the ... bar.', 'mcq', 'status', 'scroll', 'progress', 'drawing', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1664, 'n', 'Changing the width of the lines in a paragraph is known as ', 'mcq', 'indentation', 'alignment', 'spacing', 'formatting', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1665, 'n', '... is used to position the text on a specific location.', 'mcq', 'Tab', 'Arrow Keys', 'space', 'backspace', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1666, 'n', '... break is a point where current page ends and a new page begins.', 'mcq', 'page', 'section', 'line', 'paragraph', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1667, 'n', 'A user can separate a part of the document by using ... break.', 'mcq', 'section', 'page', 'paragraph', 'line', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1668, 'n', '... is amount of spaces between the text and edges of your paper.', 'mcq', 'margin', 'alignment', 'border', 'none of these', '##', 'none of these', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1669, 'n', 'Soft page break is also known as ... page break.', 'mcq', 'automatic', 'short', 'long', 'hard', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1670, 'n', '... are text or pictures that appear behind the document text.', 'mcq', 'watermarks', 'columns', 'fonts', 'page numbers', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1671, 'n', 'Always ... a document before printing.', 'mcq', 'preview', 'view', 'read', 'write', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1672, 'n', '... is the way in which text is placed between the margins of a page.', 'mcq', 'alignment', 'watermark', 'pasting', 'numbering', '##', '##', NULL, 00073, 0);
INSERT INTO `questions` VALUES(1673, 'n', 'A single page of presentation created in PowerPoint is called ', 'mcq', 'Slide', 'Media', 'Text', 'Slide Show', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1674, 'n', 'There are ... elements of multimedia.', 'mcq', 'five', 'two', 'three', 'four', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1675, 'n', 'The combination of numbers and letters is known as ', 'mcq', 'text', 'symbols', 'numbers', 'alphabets', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1676, 'n', 'Cartoon movies are the example of ', 'mcq', 'animation', 'painting', 'drawing', 'photograph', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1677, 'n', 'The digital representation of non text information is called', 'mcq', 'Graphics', 'Animation', 'Sound', 'Video', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1678, 'n', 'The movement of an object is created by using ... technique.', 'mcq', 'animation', 'presentation', 'motion', 'execution', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1679, 'n', 'The name of the PowerPoint file is seen on the ... bar.', 'mcq', 'Title', 'Scroll', 'Menu', 'Status', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1680, 'n', '... is the keyboard shortcut to create a new file in the PowerPoint.', 'mcq', 'Ctrl + N', 'Ctrl + P', 'Ctrl + V', 'Ctrl + C', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1681, 'n', 'All slide layouts contain boxes with dotted borders called', 'mcq', 'Placeholder', 'Box holder', 'Text holder', 'Titleholder', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1682, 'n', 'The presentation of all slides created in PowerPoint is called', 'mcq', 'Slide Show', 'Laser Show', 'Slide View', 'Slide Design', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1683, 'n', 'Slide .... are the effects that determine how a slide moves in and out of the view in the slide show.', 'mcq', 'transition', 'layout', 'template', 'animation', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1684, 'n', 'In which tab a user can find Slide Transition?', 'mcq', 'Design Tab', 'Review Tab', 'Animation Tab', 'Home Tab', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1685, 'n', 'The list of animated effects that a user can apply to the selected object on the slide is called', 'mcq', 'custom animation', 'slide transition', 'long animation', 'smooth animation', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1686, 'n', 'An orderly display of information using different media elements is known as ', 'mcq', 'Multimedia Presentation', 'Animation', 'Transition', 'Layout', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1687, 'n', 'The arrangement of the objects on the slide is known as Slide ...', 'mcq', 'Layout', 'Design', 'Show', 'Transition', '##', '##', NULL, 00074, 0);
INSERT INTO `questions` VALUES(1688, 'n', 'What are the rules for exchanging data between computers called?', 'mcq', 'protocol', 'URL', 'Medium', 'Browser', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1689, 'n', 'What is the technology that uses existing telephone line to provide high speed internet access called?', 'mcq', 'DSL', 'Cable Modem', 'Internet Modem', 'Dialup Modem', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1690, 'n', 'What communication medium is used to transfer data in dialup modem internet access? ', 'mcq', 'telephone line', 'search engine', 'tv cable', 'web browser', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1691, 'n', 'Which device is used as a communication device in Internet? ', 'mcq', 'Modem', 'Telephone Set', 'Mouse', 'Monitor', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1692, 'n', 'Which of the following is a famous and commonly used web browser?', 'mcq', 'Internet Explorer', 'Mozilla', 'MSN', 'Yahoo', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1693, 'n', 'Which language is used to create web pages?', 'mcq', 'HTML', 'JAVA', 'LOGO', 'FOXPRO', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1694, 'n', 'Which of the following is not a search engine?', 'mcq', 'Internet Explorer', 'Yahoo', 'MSN', 'Google', '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1695, 'n', 'Define Internet.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1696, 'n', 'Write few advantages of using Internet.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1697, 'n', 'Name any four services offered by the Internet.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1698, 'n', 'How e-mail is different from traditional postal service.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1699, 'n', 'Write advantages and disadvantages of e-mail service.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1700, 'n', 'Write advantages of FTP and Chatting service.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1701, 'n', 'What is ISP? Name different means of Internet offered by ISP. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1702, 'n', 'Why DSL Internet Access is better than Dialup Modem Internet Access?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1703, 'n', 'What is the main difference between Cable Modem and DSL Internet Access?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1704, 'n', 'What is a purpose of using a web browser?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1705, 'n', 'What is a search engine? Name few commonly used search engines.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00070, 0);
INSERT INTO `questions` VALUES(1706, 'n', 'ویو موشن کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1707, 'n', ' ہُک کا قانون بیان کریں اور سپرنگ کونسٹنٹ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1708, 'n', 'فریکوینسی، ایمپلی ٹیوڈ، ڈسپلیسمنٹ، کرسٹ اور ٹرف کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1709, 'n', 'ٹائم پیریڈ اور ویو لینگتھ سے کیا مُراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1710, 'n', 'سمپل ہارمونک موشن اورڈسپلیسمنٹ سے کیا مُراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1711, 'n', 'سمپل ہارمونک موشن کی خصوصیات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1712, 'n', 'ویوز کی اقسام اورمکینیکل ویوز کی اقسام بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1713, 'n', 'رپل ٹینک کسے کہتے ہیں نیز ِرفلیکشن اور ِرفریکشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1714, 'n', 'ڈفریکشن اور انٹرفیرینس کی تعریف کریں نیز انٹرفیرینس کی اقسام بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1715, 'n', 'سٹیشنری ویوز کسے کہتے ہیں؟ نوڈ اور اینٹی نوڈ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1716, 'n', 'وائبریٹری موشن کیلئے ضروری شرئط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1717, 'n', 'سپرنگ کونسٹنٹ کا یونٹ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1718, 'n', 'ریسٹورنگ فورس سے کیا مراد ہے؟ اسکا فارمولہ تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1719, 'n', 'سمپل پنڈولم کسے کہتے ہیں؟ اسکے ٹا ئم پیریڈ کا فارمولہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1720, 'n', 'مکینیکل ویوز کی مثالیں دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1721, 'n', 'فریکونسی اور ٹائم پیریڈ میں کیا تعلق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1722, 'n', 'ڈفریکشن کے لئے ضروری شرائط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1723, 'n', 'سٹیشنری ویوز کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00076, 0);
INSERT INTO `questions` VALUES(1724, 'n', ' آوازکیسے پیدا ہوتی ہیے نیز ٹیوننگ فورک کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1725, 'n', 'آوازکی سماعت تفصیل سے بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1726, 'n', 'آوازکی بلندی کی تعریف کریں۔ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1727, 'n', 'آواز کی کوالٹی کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1728, 'n', 'آوازکی شدت سے کیا مراد ہیے۔ اس کا یونٹ کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1729, 'n', 'ڈیسی بل سکیل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1730, 'n', ' آوازکے لیول اور ڈیسی بل سکیل سے کیا مراد ہے؟     ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1731, 'n', 'آوازکی شدت اور لاؤڈینس میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1732, 'n', ' آوازکی ِپچ سے کیا مراد ہے؟ اس کا ِاس کا ِانحصارِکس چیز پرہوتا ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1733, 'n', 'آوازکی بلندی کا انحصار کن باتون پر ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1734, 'n', 'ویبرفیچنر کا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1735, 'n', 'مدھم ترین آواز کی شد ت کتنی ہوتی ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1736, 'n', 'آواز کی ویوز کس قسم کی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1737, 'n', 'وسطی کان میں کونسی تین ہڈیاں ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1738, 'n', 'موسیقائی آواز اور شور میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1739, 'n', 'قابلِ سماعت آواز کی حدود بیان کریں', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1740, 'n', ' آواز کی کونسی خصوصیت بھاری اور باریک آواز میں فرق کرتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1741, 'n', 'الٹرا سونک کے دو فوائد بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00077, 0);
INSERT INTO `questions` VALUES(1742, 'n', 'روشنی کی رفلیکشن کے قوانین لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1743, 'n', 'سفیریکل مررز کسے کہتے ہیں؟ نیز اقسام بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1744, 'n', 'لینیرمیگنی  ِفکیشن کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1745, 'n', 'رفریکشن کے قوانین بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1746, 'n', 'ٹوٹل ِانٹرنل رفلیکشن کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1747, 'n', 'ٹوٹل ِانٹرنل ِرفلیکشن کی شرائط بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1748, 'n', 'سنیل کا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1749, 'n', 'ابریشن کسے کہتے ہیں؟ نیز اقسام بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1750, 'n', 'لینز کی پاورسے کیا  ُمراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1751, 'n', 'قریب نظری  اوربعید نظری کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1752, 'n', ' کم فوکل لینگتھ کے لینز کی پاور ذیادہ ہوتی ہے یا ذیادہ فوکل لینگتھ کے لینزکی؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1753, 'n', 'سنٹر آف کرویچر اور ریڈیس آف کرویچر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1754, 'n', 'پرنسپل ایکسز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1755, 'n', ' کریٹیکل اینگل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1756, 'n', 'پیری سکوپ کسے کہتے ہیں؟ اسکا استعمال بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1757, 'n', 'ٹوٹلی رفریکٹو پرزم کیا ہوتا ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1758, 'n', 'آپٹیکل فائبر سے کیا مراد ہے؟ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1759, 'n', 'انڈوسکوپ اور برانکو سکوپ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1760, 'n', 'رینبو میں رنگوں کی ترتیب بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1761, 'n', ' لینز فارمولہ کیا ہوتا ہے؟ نیز کس لینز کا فوکل لینگتھ مثبت اور کسکا منفی ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00078, 0);
INSERT INTO `questions` VALUES(1762, 'n', 'الیکٹروسٹیٹک انڈکشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1763, 'n', ' گولڈ لیف الیکٹروسکوپ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1764, 'n', 'الیکٹرک فیلڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1765, 'n', 'الیکٹرک انٹینسٹی کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1766, 'n', 'الیکٹرک لائنزآف فورس کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1767, 'n', 'الیکٹرک پوٹینشل کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1768, 'n', 'پوٹینشل انرجی کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1769, 'n', 'کپیسٹر اور کپیسی ٹینس کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1770, 'n', 'کپیسٹر کو جوڑنے کے طریقے بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1771, 'n', 'پوائنٹ چارج سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1772, 'n', 'چارج کی یونٹ کیا ہے؟ اسکی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1773, 'n', ' الیکٹرک پوٹینشل کا یونٹ کیا ہے؟ اسکی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1774, 'n', 'الیکٹروسٹیٹک کے دو استعمال لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1775, 'n', 'کپیسیٹینس کا یونٹ کیا ہے؟ اسکی تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1776, 'n', 'فکسڈ کیپیسٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1777, 'n', 'کولمب کونسٹنٹ سے مراد ہے؟ اسکا انحصار کن پر ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1778, 'n', 'پازیٹو چارج کا الیکٹرک فیلڈ بنائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1779, 'n', 'الیکٹرون وولٹ کی تعریف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1780, 'n', 'فیریڈ کے دو اضعاف لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1781, 'n', '<span dir=''rtl''>10uc</span> چارج کتنے الیکڑونز کے برابر ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1782, 'n', 'جب  <span dir=''rtl''>10Cµ </span>چارج کسی  نقطہ پر رکھا جاتا ہے تو اس پر <span dir=''rtl''>N 10</span>فورس عمل کرتی ہے۔ اس نقطہ پر الیکٹرک انٹینسٹی کی مقدار معلوم کیجئے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00079, 0);
INSERT INTO `questions` VALUES(1783, 'n', 'الیکٹرک کرنٹ کسے کہتے ہیں؟ اسکا یونٹ کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1784, 'n', 'ای۔ ایم۔ ایف کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1785, 'n', 'پوٹینشل ڈفرینس اور ای۔ ایم۔ ایف میں فرق بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1786, 'n', 'اوہم کا قانون بیان کریں۔ ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1787, 'n', 'اوہم کے قانون کی حدود کار بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1788, 'n', 'ٹمپریچر کا رزسٹنس پر اثر بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1789, 'n', 'گیلوانو میٹرکسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1790, 'n', 'ایم میٹرکسے کہتے ہیں؟ یہ کیسے بنایا اورجوڑا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1791, 'n', 'وولٹ میٹرکسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1792, 'n', 'جول کا قانون بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1793, 'n', 'کنونشنل کرنٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1794, 'n', 'الیکٹرک کرنٹ کے یونٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1795, 'n', 'پوٹینشل ڈفرنس کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1796, 'n', ' اگر کسی کنڈکٹر کی رزسٹنس 5 اوہم اور اس میں سے گزرنے والے کرنٹ کی مقدار 1 ایمپئر ہو تو اس کے اطراف میں پوٹینشل ڈفرنس معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1797, 'n', ' اگر کسی کراس سیکشنل ایریا میں سے 2 سیکنڈ میں 20 کولمب چارج گزر رہا ہو اس میں سے بہنے والا کرنٹ معلوم کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1798, 'n', 'سپیسیفک رزسٹنس کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1799, 'n', 'رزسٹنس کے یونٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1800, 'n', 'کلوواٹ آور سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1801, 'n', ' گیلوانومیٹر کو وولٹ میٹر میں کیسے تبدیل کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1802, 'n', 'ڈائریکٹ کرنٹ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1803, 'n', 'اے سی کرنٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1804, 'n', 'واٹ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1805, 'n', 'بجلی کی قیمت معلوم کرنے کا کلیہ لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1806, 'n', ' الیکٹرک پاور سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00080, 0);
INSERT INTO `questions` VALUES(1807, 'n', 'الیکٹرومیگنیٹک انڈکشن کے بارے میں فیراڈے کا قانون کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1808, 'n', 'میگنیٹک لائنز آف فورس کا تعین کسطرح کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1809, 'n', 'میوچل انڈکشن کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1810, 'n', 'فلیمنگ کا بائیں ہاتھ کا اصول کیا ہےِ؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1811, 'n', 'سیلف انڈشن کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1812, 'n', 'سولینائیڈ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1813, 'n', 'ٹرانسفارمر کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1814, 'n', 'پرائمری کوائل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1815, 'n', ' کوائل میں کرنٹ کی وجہ سے پیدا ہونے والی لائنز آف فورس کس قسم کی ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1816, 'n', 'ڈی سی موٹر میں سپلٹ رنگز کا کیا کام ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1817, 'n', 'ڈی سی موٹر اور اے سی جنڑیٹر میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1818, 'n', 'ٹرانسفارمر کا اصول بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1819, 'n', 'ڈی سی موٹر کیا کام سر انجام دیتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1820, 'n', 'ڈی سی موٹر کا اصول بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1821, 'n', 'اے سی جنریٹر کس اصول پر کام کرتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1822, 'n', 'میگنیٹک فلکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1823, 'n', 'سٹیپ اپ ٹرانسفارمر کسے کہتے ہیں؟ اسکا مقصد کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1824, 'n', 'سٹیپ ڈاؤن ٹرانسفامر کسے کہتے ہیں؟ اسکا مقصد بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1825, 'n', 'سولینائڈ کا میگنیٹک فیلڈ کس طرح کا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1826, 'n', 'سیدھے کرنٹ بردار کنڈکٹر کی میگنیٹک لائنز آف فورس کی سمت کس قانون کے تحت معلوم کرتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00081, 0);
INSERT INTO `questions` VALUES(1827, 'n', 'چارج نمبر یا اٹامک نمبر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1828, 'n', 'اٹامک ماس نمبر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1829, 'n', 'نیچرل ریڈیواکٹیویٹی کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1830, 'n', 'ہاف لائف سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1831, 'n', 'ریڈیوآ   ئسوٹوپ کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1832, 'n', 'فشن ری ایکشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1833, 'n', 'نیوکلئیر فیوژن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1834, 'n', 'الفا ریز اصل میں کیا ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1835, 'n', 'گیما ریز کی کیا رفتار ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1836, 'n', 'گیما ریز کی کسی چیز میں داخل ہونے کی کس قدر صلاحیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1837, 'n', 'ریڈیوآئسوٹوپس کا طب میں استعمال بتائیے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1838, 'n', 'تھیوری آف ریڈیوایکٹیویٹی کی مساوات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1839, 'n', 'چین فشن ری ایکشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1840, 'n', 'ریڈی ایشن کے خطرات سے بچاؤ کی دو حفاظتی تدابیر لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1841, 'n', 'ریڈیوایکٹو میٹیریل کو کہاں رکھنا چاہیے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1842, 'n', 'ریڈیوایکٹیویٹی کے دوران کون سی شعاعیں خارج ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1843, 'n', 'نیوکلیائڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1844, 'n', 'الفا ریز کی تین خصوصیات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1845, 'n', 'بیٹا ریز کی تین خصوصیات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1846, 'n', 'گیما ریز کی تین خصوصیات لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1847, 'n', '2کلوگرام کاربن کو انرجی میں تبدیل کرنے سے کتنی انرجی حاصل ہوگی۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1848, 'n', 'ریڈیوآ ئسوٹوپس کے روزمرّہ زندگی میں دو استعمال بتایئے۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1849, 'n', 'ریڈی ایشن کے کیا خطرات ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00082, 0);
INSERT INTO `questions` VALUES(1850, 'n', 'الیکٹرونکس کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1851, 'n', 'اینالوگ اور ڈیجیٹل الیکٹرونکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1852, 'n', 'سیمی کنڈکٹر کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1853, 'n', 'این ٹائپ سیمی کنڈکٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1854, 'n', 'پی ٹائپ سیمی کنڈکٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1855, 'n', 'پی این جنکشن ڈائیوڈ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1856, 'n', 'ریورسڈ بائسڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1857, 'n', 'فارورڈ بائسڈ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1858, 'n', 'بولین ویری ایبلز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1859, 'n', 'اینڈ آپریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1860, 'n', 'لاجک گیٹس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1861, 'n', 'آر گیٹ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1862, 'n', 'ڈپلیشن ریجن کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1863, 'n', 'ریکٹیفیکیشن اور  ریکٹی فائر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1864, 'n', 'این پی این ٹرانزسٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1865, 'n', 'پی این پی ٹرانزسٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1866, 'n', 'ناٹ گیٹ کے لیے ٹروتھ ٹیبل بنائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1867, 'n', 'ڈوپنگ کسے کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1868, 'n', 'انسولیٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1869, 'n', 'اینالوگ مقداریں کیا ہوتی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1870, 'n', 'ٹرانزسٹر کے مرکزی حصے اور اطراف کو کیا کہتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1871, 'n', 'اینالوگ ٹو ڈیجیٹل <span dir=''rtl''>(ADC)</span> سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00083, 0);
INSERT INTO `questions` VALUES(1872, 'n', 'ہاورڈ ایکن نے بنایا', 'mcq', '<span dir=''rtl''>Mark 1</span>', '<span dir=''rtl''>UNIVAC-1</span>', '<span dir=''rtl''>ENIAC</span>', '<span dir=''rtl''>ABC</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1873, 'n', 'جنگِ عظیم دوم کے دوران میکاؤلی اور ایکرٹ نے بنایا', 'mcq', '<span dir=''rtl''>ENIAC</span>', '<span dir=''rtl''>ABC</span>', '<span dir=''rtl''>UNIVAC-1</span>', '<span dir=''rtl''>Mark 1</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1874, 'n', 'ڈیٹا اور پروگرام کو میموری میں محفوظ کرنے کا عمل کہلاتا ہے', 'mcq', 'سٹورڈ پروگرام کا تصور', 'ڈیٹا پراسسنگ', 'فکسڈ ڈسک', 'سی پی یو', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1875, 'n', 'ڈیٹا ور پروگرام کو میموری میں محفوظ کرنے کا تصور پیش کیا تھا', 'mcq', 'جان وان جیومن', 'ڈاکٹر قدیر', 'ڈاکٹر عبدالسلام', 'پاسکل', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1876, 'n', 'پہلی جنریشن کے کمپیوٹر میں استعمال کیا گیا', 'mcq', 'ویکیوم ٹیوب', 'انٹی گریٹڈ سرکٹ', 'ٹرانزسٹر', 'مائیکروپراسیسر', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1877, 'n', 'دوسری جنریشن کے کمپیوٹر میں استعمال کیا گیا', 'mcq', 'ٹرانزسٹر', 'ویکیوم ٹیوب', 'مائیکروپراسیسر', 'انٹی گریٹد سرکٹ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1878, 'n', 'پہلا الیکٹرانک ڈیجیٹل کمپیوٹر تھا', 'mcq', '<span dir=''rtl''>ENIAC</span>', '<span dir=''rtl''>Mark 1</span>', '<span dir=''rtl''>ABC</span>', '<span dir=''rtl''>UNIVAC-1</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1879, 'n', 'الیکٹرانک نومیریکل انٹی گریٹر اینڈ کمپیوٹر کس چیز پر مشتمل تھا', 'mcq', 'ویکیوم ٹیوب', 'انٹی گریٹڈ سرکٹ', 'ٹرانزسٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1880, 'n', 'چوتھی جنریشن کے کمپیوٹر میں استعمال کیا گیا', 'mcq', 'مائیکروپراسیسر', 'انٹی گریٹڈ سرکٹ', 'ٹرانزسٹر', 'ویکیوم ٹیوب', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1881, 'n', 'پہلا مائیکرو پراسیسر کس چیز سے بنا؟', 'mcq', 'انٹی گریٹڈ سرکٹ ', 'ویکیوم ٹیوب', 'ڈیجیٹل ڈیوائڈر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1882, 'n', 'درج ذیل میں سے چوتھی جنریشن کے کمپیوٹر کی مثال ہے', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'ایپل میکنٹوش', 'آئی بی ایم پی سی', 'آئی بی ایم 370 ', 'آئی بی ایم 370 ', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1883, 'n', 'کونسی آپشن انٹی گریٹڈ سرکٹ کے بارے میں درست ہے؟', 'mcq', 'تمام', 'ہزاروں ٹرانزسٹر پر مشتمل', 'اس کا سائز 1/4 مربع انچ ہے', '<span dir=''rtl''>1961 میں ایجاد ہوا</span>', '##', 'تمام', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1884, 'n', 'کس سائنسدان نے 1970ء میں انٹل کمپنی کے لئے پہلا مائیکروپراسیسر تیار کیا؟', 'mcq', 'ٹیڈہوف', 'وان نیومن', 'جان ایکرٹ', 'چارلس بابیج', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1885, 'n', 'ایک چ؟پ پر آنے والا پہلا مائیکروپراسیسر تھا', 'mcq', '<span dir=''rtl''>Intel 4004</span>', '<span dir=''rtl''>UNIVAC-1</span>', '<span dir=''rtl''>Athlon</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1886, 'n', 'مائیکروپراسیسر کے بارے میں کونسی بات درست ہے؟', 'mcq', 'تمام', 'ٹیڈہوف نے بنایا', 'انٹی گریٹڈ سرکٹ پر مشتمل', 'ایک مربع انچ سے چھوٹا', '##', 'تمام', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1887, 'n', 'تجارتی سطح پر کمپیوٹر کے دور کا آغاز کس کمپیوٹر سے ہوا؟', 'mcq', '<span dir=''rtl''>UNIVAC</span>', '<span dir=''rtl''>ENIAC</span>', '<span dir=''rtl''>DECVAC</span>', '<span dir=''rtl''>COMPVAC</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1888, 'n', '<span dir=''rtl''>IBM 360</span> سیریز کس جنریشن میں متعارف ہوئی؟', 'mcq', 'تیسری', 'پہلی', 'دوسری', 'چوتھی', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1889, 'n', 'ویکیوم ٹیوب کے مقابلے میں ٹرانزسٹر کے فوائد تھے', 'mcq', 'تمام', 'کم حرارت کا اخراج', 'تیز رفتار', 'چھوٹا سائز', '##', 'تمام', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1890, 'n', 'کس کمپنی کا بنایا ہو معیار کمپیوٹر بنانے والی تمام کمپنیوں نے نقل کیا؟', 'mcq', '<span dir=''rtl''>IBM</span>', '<span dir=''rtl''>Apple</span>', '<span dir=''rtl''>MITS</span>', '<span dir=''rtl''>Compaq</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1891, 'n', 'ڈیسک ٹاپ اور پرسنل کمپیوٹر کا ایک اور نام ہے۔', 'mcq', 'مائیکروکمپیوٹر', 'مین فریم کمپیوٹر', 'سُپر کمپیوٹر', '<span dir=''rtl''>b اور c دونوں</span>', '##', '<span dir=''rtl''>b اور c دونوں</span>', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1892, 'n', 'پرسنل کمپیوٹر کے لئے سب سے مقبول آپریٹنگ سسٹم ہے', 'mcq', 'ونڈوز', 'ڈاس', 'یونیکس', 'لائنکس', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1893, 'n', 'درج ذیل میں کونسی آپشن کمپیوٹر کی قسم کو ظاہر نہیں کرتی۔', 'mcq', 'گلیکسی کمپیوٹر', 'لیپ ٹاپ کمپیوٹر', 'منی کمپیوٹر', 'مین فریم کمپیوٹر', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1894, 'n', 'درج ذیل میں تمام پرسنل کمپیوٹر سمجگے جاتے ہیں، سوائے', 'mcq', 'مین فریم کمپیوٹر', 'پاکٹ کمپیوٹر', 'لیپ ٹاپ کمپیوٹر', 'ڈیسک ٹاپ کمپیوٹر', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1895, 'n', 'درج ذیل میں کونسا کمپیوٹر پورٹیبل نہیں', 'mcq', 'مین فریم کمپیوٹر', 'پام ٹاپ کمپیوٹر', 'لیپ ٹاپ کمپیوٹر', '<span dir=''rtl''>a اور b دونوں</span>', '##', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1896, 'n', '<span dir=''rtl''>LCD</span> لفظ کا مخفف ہے', 'mcq', '<span dir=''rtl''>Liquid Crystal Display</span>', '<span dir=''rtl''>Linear Crystal Display</span>', '<span dir=''rtl''>Layered Crystal Display</span>', '<span dir=''rtl''>Long Crystal Display</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1897, 'n', 'کونسا کمپیوٹر سب سے ذیادہ طاقتور ہے۔', 'mcq', '<span dir=''rtl''>IBM S/390</span>', '<span dir=''rtl''>Cray T90</span>', '<span dir=''rtl''>HP 3000</span>', '<span dir=''rtl''>IBM-PC</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1898, 'n', '<span dir=''rtl''>HP 3000</span> کس کمپیوٹر کی مثال ہے؟', 'mcq', 'منی کمپیوٹر', 'سپر کمپیوٹر', 'مائیکروکمپیوٹر', 'پاکٹ کمپیوٹر', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1899, 'n', 'کونسا کمپیوٹر سپر کمپیوٹر کی مثال ہے؟', 'mcq', '<span dir=''rtl''>Cray T90</span>', '<span dir=''rtl''>IBM S/390</span>', '<span dir=''rtl''>HP 3000</span>', '<span dir=''rtl''>IBM-PC</span>', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1900, 'n', 'کونسا کمپیوٹر الجبرا کے متعلق مسائل حل کرنے کیلئے بہترین ہے؟', 'mcq', 'ڈیجیٹل کمپیوٹر', 'ہائی برڈ کمپیوٹر', 'اینالوگ کمپیوٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1901, 'n', 'کونسا آپشن اینا لوگ کمپیوٹر کی مثال ہے؟', 'mcq', 'تمام', 'سلائیڈ رول', 'ہارمونک اینا لائزر', 'کروی میٹر', '##', 'تمام', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1902, 'n', 'کونسا کمپیوتر اینا لوگ اور ڈیجیٹل کمپیوٹر کی مشترکہ خصوصیات رکھتا ہے؟', 'mcq', 'ہائی برڈ کمپیوٹر', 'میکسی کمپیوٹر', 'ڈیجیٹل ٹواینالاگ کمپیوٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1903, 'n', 'ایسی لینگویج جس میں ہدایات بائنری کوڈ میں لکھی جاتی ہیں', 'mcq', 'مشین لینگویج', 'اسمبلی لینگویج', 'ہائی لیول لینگویج', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1904, 'n', 'مشین لینگویج میں پروگرام لکھنے کا عمل ہوتا ہے', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'مشکل', 'سادہ', 'وقت طلب', '<span dir=''rtl''>a اور b دونوں</span>', 'سادہ', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1905, 'n', 'اونچی سطح کی لینگویج میں پروگرام لکھنے کا عمل مشین لینگویج کے مقابلے میں', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'کم وقت طلب', 'ذیادہ وقت طلب', 'کم سادہ ہے', '<span dir=''rtl''>a اور b دونوں</span>', 'ذیادہ وقت طلب', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1906, 'n', 'درج ذیل میں سے کونسی لینگویج اونچی سطح کی زبان نہیں ہے؟', 'mcq', 'اسمبلی ', 'پاسکل', 'بیسک', 'فورٹران', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1907, 'n', 'سب سے نچلی سطح کی پروگرامنگ لینگویج ہے', 'mcq', 'اسمبلی', 'جاوا', 'سی پلس پلس', 'پاسکل', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1908, 'n', 'اسمبلی لینگویج استعمال کرتی ہے', 'mcq', 'نیمونیکس', 'صفر اور ایک', 'بائنری اعداد', 'انگلش الفاظ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1909, 'n', 'کونسی لینگویج کاروباری استعمال کیلئے بہترین ہے؟', 'mcq', 'کوبول', 'بیسک', 'اسمبلی', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1910, 'n', 'سی لینگویج کس نے بنائی؟', 'mcq', 'ڈینس رچی', 'چارلس بابیج', 'الخوارزمی', 'وان نیومن', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1911, 'n', 'کونسی لینگویج مصنوعی ذہانت کیلئے خصوصی بنائی گئی؟', 'mcq', 'لِسپ', 'پاسکل', 'سی پلس پلس', 'کوبول', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1912, 'n', 'یونیکس آپریٹنگ سسٹم کس لینگویج میں بنایا گیا؟', 'mcq', 'سی', 'کوبول', 'جاوا', 'لسپ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1913, 'n', 'ریاضی اور انجیئنرنگ کے شعبے میں استعمال ہونیوالی لینگویج ہے۔', 'mcq', 'فورٹران', 'اسمبلی لینگویج', 'کوبول', 'بیسک', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1914, 'n', 'کونسی لینگویج آبجیکٹ اورئنٹڈ کہلاتی ہے؟', 'mcq', 'سی پلس پلس', 'بیسک', 'کوبول', 'اسمبلی', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1915, 'n', 'ویژؤل بیسک کس کی پراڈکٹ ہے؟', 'mcq', 'مائیکروسافٹ', 'آئی بی ایم', 'سن سسٹمز', 'ہیولیٹ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1916, 'n', 'جاوا کس کی پراڈکٹ ہے؟', 'mcq', 'سن سسٹمز', 'مائیکروسافٹ', 'آئی بی ایم', 'ہیولیٹ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1917, 'n', 'کونسا ٹرانسلیٹر سورس کوڈ کو ایک ہی بار مشین کوڈ میں تبدیل کرتا ہے؟', 'mcq', 'کمپائلر', 'انٹرپریٹر', 'اسمبلر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1918, 'n', 'کونسا ٹرانسلیٹر سورس کوڈ کی ایک ایک لائن کو مشین کوڈ میں تبدیل کرتا ہے؟', 'mcq', 'انٹر پریٹر', 'کمپائلر', 'اسمبلر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1919, 'n', 'کمپائلر کی آؤٹ پُٹ ہے', 'mcq', 'مشین کوڈ', 'لنک کوڈ', 'سورس کوڈ', 'لائبریری کوڈ', '##', '##', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1920, 'n', 'عمومی مقاصد کیلئے سنگل یوزرز کمپیوٹر ہے۔', 'mcq', 'پرسنل کمپیوٹر', 'سپر کمپیوٹر', 'ٹرمینل', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00002, 0);
INSERT INTO `questions` VALUES(1921, 'n', 'کمپیوٹر کس چیز کا مجموعہ ہے؟', 'mcq', 'دونوں', 'سافٹ وئیر', 'ہارڈوئیر', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1922, 'n', 'ہارڈ وئیر کی بہترین تعریف ہے۔', 'mcq', 'فزیکل حصے', 'پرنٹ کئے گئے نتائج', 'پروگرام', 'منطقی حصے', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1923, 'n', 'کونسی چیز کمپیوٹر ہارڈ وئیر نہیں ہے؟', 'mcq', 'سافٹ وئیر', 'سسٹم یونٹ', 'ان پُٹ یونٹ', 'آؤٹ پُٹ یونٹ', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1924, 'n', 'درج ذیل میں سے کونسی چیز ان پُٹ کا آلہ ہے۔', 'mcq', 'تمام', 'کی بورڈ', 'ماؤس', 'مائیکروفون', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1925, 'n', 'کونسا ان پُٹ کا آلہ ٹیکسٹ داخل کرنے کیلئے استعمال ہوتا ہے؟', 'mcq', 'کی بورڈ', 'ماؤس', 'مائیکروفون', 'سکینر', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1926, 'n', 'کونسا ان پُٹ کا آلہ آواز داخل کرنے کیلئے استعمال ہوتا ہے؟', 'mcq', 'مائیکروفون', 'ماؤس', 'کی بورڈ', 'سکینر', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1927, 'n', 'کونسی آپشن آؤٹ پُٹ کا آلہ ہے؟', 'mcq', 'تمام', 'مانیٹر', 'پرنٹر', 'سپیکر', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1928, 'n', 'مدربورڈ پر ہوتا ہے۔', 'mcq', 'تمام', 'پورٹس', 'میموری چِپ', 'پراسیسر چِپ', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1929, 'n', 'درج ذیل میں سے کونسی آپشن آؤٹ پُٹ کا آلہ نہیں ہے؟', 'mcq', 'سکینر', 'مانیٹر', 'پرنٹر', 'سپیکر', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1930, 'n', 'سافٹ وئیر کی دو اقسام ہیں۔', 'mcq', 'ایپلی کیشن سافٹ وئیر اور سسٹم سافٹ وئیر', 'سسٹم سافٹ وئیر اور ڈیزائن سافٹ وئیر', 'ایپلی کیشن سافٹ وئیر اور ڈیزائن سافٹ وئیر', 'تمام', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1931, 'n', 'ایسا سافٹ وئیر جو ہارڈ وئیر کے افعال کو کنٹرول کرتا ہے۔', 'mcq', 'سسٹم سافٹ وئیر', 'ایپلی کیشن سافٹ وئیر', 'سافٹ وئیر پیکج', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1932, 'n', 'سرج ذیل میں سے کونسی آپشن سسٹم سافٹ وئیر ہے۔', 'mcq', 'تمام', 'آپریٹنگ سسٹم', 'یوٹیلیٹی پروگرام', 'لینگویج ٹرانسلیٹر', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1933, 'n', 'درج ذیل میں سے کونسی آپشن ایپلی کیشن سافٹ وئیر نہیں ہے۔', 'mcq', 'آپریٹنگ سسٹم', 'ورڈ پراسیسر', 'سپریڈشیٹ', 'ڈیٹا بیس', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1934, 'n', '<span dir=''rtl''>CPU</span> ایک مثال ہے۔', 'mcq', 'پارڈ وئیر', 'سافٹ وئیر', 'پروگرام', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1935, 'n', 'کمپیوٹر کا دماغ جو پروگرام کی ہدایات کو چلاتا ہے۔', 'mcq', 'سی پی یو', 'ریم', 'مدربورڈ', 'سسٹم یونٹ', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1936, 'n', 'سی پی یو کا دوسرا نام ہے۔', 'mcq', 'پراسیسر', 'کنٹرولر', 'مین میموری', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1937, 'n', '<span dir=''rtl''>CPU کا مخفف ہے۔</span>', 'mcq', '<span dir=''rtl''>Central Processing Unit</span>', '<span dir=''rtl''>Central Product Unit</span>', '<span dir=''rtl''>Central Program Usage</span>', '<span dir=''rtl''>Computing Program Usage</span>', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1938, 'n', '<span dir=''rtl''>CU</span> مخفف ہے۔', 'mcq', '<span dir=''rtl''> Control Unit </span>', '<span dir=''rtl''> Cache Unit </span>', '<span dir=''rtl''> Calculating Unit </span>', '<span dir=''rtl''> Communication Unit', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1939, 'n', 'سی پی یو میں تمام چیزیں کوجود ہوتی ہیں، سوائے', 'mcq', 'مین میموری', '<span dir=''rtl''> ALU </span>', 'کنٹرول یونٹ', 'رجسٹر', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1940, 'n', 'سی پی یو مشتمل ہوتا ہے۔', 'mcq', '<span dir=''rtl''> Control Unit  اور ALU</span> ', 'کنٹرول یونٹ اور مین میموری', 'مین میموری اور سٹوریج', 'آپریٹنگ سسٹم اور ایپلی کیشن', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1941, 'n', 'تمام کمپیوٹر سسٹم میں رابطہ قائم کرتا ہے۔', 'mcq', 'کنٹرول یونت', '<span dir=''rtl''> ALU </span>', 'میموری', 'کوئی نہیں', '<span dir=''rtl''> ALU </span>', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1942, 'n', 'سی پی یو کا کونسا حصہ دو مقداروں میں موازنہ کرنے کا ذمہ دار ہے؟', 'mcq', '<span dir=''rtl''>ALU</span>', 'کنٹرول یونٹ', 'میموری', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1943, 'n', 'سی پی یو میں موجود عارضی سٹوریج لوکیشنز کہلاتی ہیں۔', 'mcq', 'رجسٹرز', 'روم ', 'ریم', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1944, 'n', 'ڈیٹا کی منتقلی کیلئے استعمال ہونےوالا لائنوں کا مجموعہ کہلاتا ہے۔', 'mcq', 'بس', 'مانیٹر', 'کلاک پلس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1945, 'n', 'درج ذیل میں سے کونسی کمپیوٹر بس نہیں ہے', 'mcq', 'ٹائمر بس', 'ایڈریس بس', 'ڈیٹا بس', 'کنٹرول بس', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1946, 'n', 'ایسی بس جو سنٹرل پراسیسنگ یونٹ اور میموری کے درمیان ڈیٹا منتقل کرتی ہے۔', 'mcq', 'ڈیٹا بس', '<span dir=''rtl''> I/O بس </span>', 'سی پی یو بس', 'پراسیسر بس', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1947, 'n', '32 لائنوں پر مشتمل بس ۔۔۔۔ ڈیٹا منتقل کر سکتی ہے۔', 'mcq', '<span dir=''rtl''>32 بٹس</span>', '<span dir=''rtl''>64 بِٹس</span>', '<span dir=''rtl''>16 بِٹس</span>', '<span dir=''rtl''>32 بائٹس</span>', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1948, 'n', '8 بِٹس ایڈریس بس ڈیٹا منتقل کر سکتی ہے۔', 'mcq', '<span dir=''rtl''>256 لوکیشنز</span>', '<span dir=''rtl''>625 لوکیشنز</span>', '<span dir=''rtl''>8 لوکیشنز</span>', '<span dir=''rtl''>16 لوکیشنز</span>', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1949, 'n', 'ریم مثال ہے', 'mcq', 'مین میموری', 'سیکنڈری میموری', 'مستقل سٹوریج', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1950, 'n', 'درج ذیل میں سے کونسی آپشن سیکنڈری میموری ہے۔', 'mcq', 'تمام', 'فلاپی ڈسک', 'ہارڈ ڈسک', 'میگنیٹک ٹیپ', '##', 'تمام', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1951, 'n', 'کمپیوٹر سے منسلک ان پُٹ ﺍ آؤٹ پُٹ آلات کہلاتے ہیں۔', 'mcq', 'پیری فرل', 'بسیں', 'سلاٹس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1952, 'n', 'سسٹم یونٹس کی ساکٹس جن میں تاریں لگائی جاتی ہیں، کہلاتی ہیں۔', 'mcq', 'پورٹس', 'لنکس', 'بس', 'پراسیسر', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1953, 'n', 'کونسی بس ایک وقت میں ایک بِٹ منتقل کرتی ہے؟', 'mcq', 'سیریل', 'متوازی', 'یوایس بی', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1954, 'n', 'کونسی پورٹ پرنٹر کو کمپیوٹر کے ساتھ منسلک کرنے کیلئے استعمال ہوتی ہے؟', 'mcq', 'متوازی', 'سیریل', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1955, 'n', 'متوازی پورٹ میں ہوتی ہیں۔', 'mcq', '25 پنیں', '35 پنیں', '45 پنیں', '12 پنیں', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1956, 'n', 'یوایس بی پورٹ کتنے آلات منسلک کر سکتی ہے؟', 'mcq', '127', '250', '300', '275', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1957, 'n', 'یوایس بی پورٹ کی ذیادہ سے ذیادہ بینڈوڈتھ ہے۔', 'mcq', '<span dir=''rtl''>12 میگابِٹ فی سیکنڈ</span>', '<span dir=''rtl''>30 میگابِٹ فی سیکنڈ</span>', '<span dir=''rtl''>120 میگابِٹ فی سیکنڈ</span>', '<span dir=''rtl''>275 میگابِٹ فی سیکنڈ</span>', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1958, 'n', 'مسائل کو حل کرنے کیلئے ہدایات کا مجموعہ کہلاتا ہے۔', 'mcq', 'پروگرام', 'انسٹرکشنز کوڈ', 'پروسیجر', 'ورڈ', '##', '##', NULL, 00048, 0);
INSERT INTO `questions` VALUES(1959, 'n', 'ڈیٹا اور معلومات کمپیوٹر میں داخل کرنے کیلئے استعمال ہونیوالے آلات کہلاتے ہیں۔', 'mcq', 'تمام', 'کی بورڈ', 'ماؤس', 'مائیکروفون', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1960, 'n', 'کونسے آلات ڈیٹا اور ہدایات کو ایسی شکل میں تبدیل کرتے ہیں جسے کمپیوٹر سمجھ سکے۔', 'mcq', 'اِن پُٹ', 'آؤٹ پُٹ', 'ذخیرہ', 'میموری', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1961, 'n', 'ایک عام استعمال ہونے والے کی بورڈ پر کتنی کیز ہوتی ہیں؟', 'mcq', '101 سے 104', '111 سے 115', '130 سے 140', '110 سے 120', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1962, 'n', '<span dir=''rtl''>QWERTY اور DVORAK</span> سے کیا مراد ہے؟', 'mcq', 'کی بورڈ لےآؤٹ', 'ماؤس بٹن لے آؤٹ', 'سکرین لے آؤٹ', 'ورڈ پراسیسنگ سافٹ وئیر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1963, 'n', 'کسی عمل کو منسوخ کرنے کیلئے کونسی کی استعمال کی جاتی ہے؟', 'mcq', 'اسکیپ کی', 'نمبر لاک کی', 'کیپس لاک کی', 'ایرو کی', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1964, 'n', 'کونسی کی کرسر کے دائیں جانِب موجود حرف ختم کرتی ہے؟', 'mcq', 'ڈیلیٹ کی', 'آلٹ کی', 'اسکیپ کی', 'بیک سپیس کی', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1965, 'n', 'کونسی کی کرسر کے بائیں جانِب موجود حرف ختم کرتی ہے؟', 'mcq', 'بیک سپیس کی', 'اسکیپ کی', 'ڈیلیٹ کی', 'آلٹ کی', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1966, 'n', 'ایرو کیز کا دوسرا نام ہے۔', 'mcq', 'کرسر کنٹرول کیز', 'موڈیفائر کیز', 'فنکشن کیز', 'ٹوگل کیز', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1967, 'n', 'کیپس لاک کی ہے۔', 'mcq', 'ٹوگل کی', 'ونڈو کی', 'موڈیفائر کی', 'کرسر کنٹرول کی', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1968, 'n', 'پوائنٹنگ آلہ کی مثال ہے۔', 'mcq', 'تمام', 'جوائےسٹک', 'ماؤس', 'ٹریک بال', '##', 'تمام', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1969, 'n', 'درج ذیل میں سے ماؤس ایونٹ ہے۔', 'mcq', 'تمام', 'بائیں کلک', 'دائیں کلک', 'ڈبل کلک', '##', 'تمام', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1970, 'n', 'کسی آبجیکٹ کی خصوصیات دیکھنے کیلئے کونسا ماؤس ایونٹ استعمال ہوتا ہے۔', 'mcq', 'دائیں کلک', 'بائیں کلک', 'سنٹر کلک', 'ڈبل کلک', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1971, 'n', 'پوائنٹر کا دوسرا نام ہے۔', 'mcq', 'ایرو', 'پکسل', 'چِپ', 'پن', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1972, 'n', 'جگہ کم ہونے کی وجہ سے ماؤس کا متبادل ہے۔', 'mcq', 'ٹریک بال', 'سکینر', 'جوائے سٹک', '<span dir=''rtl''>a اور c  دونوں</span>', 'جوائے سٹک', '<span dir=''rtl''>a اور c دونوں</span>', NULL, 00049, 0);
INSERT INTO `questions` VALUES(1973, 'n', 'مسئلہ کے حل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1974, 'n', 'کیا مسائل حل کرنے میں مہارت رکھنے والا اچھا پروگرامر بن سکتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1975, 'n', 'مسئلہ حل کرنے کی فہرست تیار کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1976, 'n', 'کسی مسئلے کا تعین کرنا کتنا اہم ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1977, 'n', 'کسی مسئلے کے حل میں ضرورتیں وضاحت سے بیان کرنے کی کیا اہمیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1978, 'n', 'کسی مسئلے کے حل میں ضرورتیں وضاحت سے بیان نہ کرنے سے کیا نقصان ہو سکتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1979, 'n', 'تجزیہ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1980, 'n', 'مسئلہ کے حل میں تجزیہ کی کیا اہمیت ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1981, 'n', 'ٹاپ ڈاؤن ڈیزائن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1982, 'n', 'کسی مسئلے کے حل میں الگورتھم کیوں ڈیزائن کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1983, 'n', 'کسی مسئلے کے حل میں فلوچارٹ کیوں ڈیزائن کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1984, 'n', 'الگورتھم میں ڈیسک چیکنگ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1985, 'n', 'پروگرام لکھنے کا عمل کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1986, 'n', 'کیا کمپیوٹر پر مسئلہ حل کرنے کیلئے سنٹیکس کا جاننا ضروری ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1987, 'n', 'بگ اور ڈی بگنگ کیا ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1988, 'n', 'پروگرام میں مختلف قسم کے ایرر کے نام لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1989, 'n', 'پروگرام کو ٹیسٹ کرنا کیوں ضروری ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1990, 'n', 'سنٹیکس ایرر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1991, 'n', 'منطقی ایرر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1992, 'n', 'رن ٹائم ایرر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1993, 'n', 'رن ٹائم ایرر اور لوجیکل ایرر میں فرق بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1994, 'n', 'پروگرام کی دیکھ بھال کرنا اور بہتر کرنا کیوں ضروری ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1995, 'n', 'مسئلہ حل کرنے کے پراسیس میں دستاویزسازی کا عمل کیوں اہم تصور کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1996, 'n', 'الگورتھم کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1997, 'n', 'الگورتھم کو ریفائن کرنے کا کیا مقصد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1998, 'n', 'فلو چارٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(1999, 'n', 'فلو چارٹ بنانے کے کوئی سے تین فوائد لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2000, 'n', 'فلوچارٹ کی کوئی سی دو خامیاں لکھیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2001, 'n', 'بیسک لینگوئج کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2002, 'n', 'بیسک میں ڈائریکٹ اور اِن ڈائریکٹ موڈ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2003, 'n', '<span dir=''rtl''>بیسک میں IDE سے کیا مراد ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2004, 'n', 'پروگرام لوڈ کرنے کی اصطلاح کی وضاحت کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2005, 'n', 'پروگرام چلانے سے پہلے کیوں لوڈ کرنا چاہیے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2006, 'n', '<span dir=''rtl''>IDE کی خصوصیات بیان کریں۔</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2007, 'n', 'کمانڈ اور ہدایت میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2008, 'n', 'کریکٹر سیٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2009, 'n', 'ذخیرہ الفاظ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2010, 'n', 'متغیرات سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2011, 'n', 'نومیرک متغیرات کس مقصد کیلئے استعمال ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2012, 'n', 'سٹرنگ متغیرات کس مقصد کیلئے استعمال ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2013, 'n', 'کونسٹنٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2014, 'n', 'متغیر اور کونسٹنٹ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2015, 'n', 'ٹائپ ڈکلئریشن کریکٹرز کیا ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2016, 'n', 'ریمارکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2017, 'n', 'آپریٹر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2018, 'n', 'حسابی ایکسپریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2019, 'n', 'ریلیشنل ایکسپریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2020, 'n', 'ریلیشنل آپریٹر کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2021, 'n', 'منطقی ایکسپریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2022, 'n', 'منطقی آپریٹر کیا ہوتا ہے؟ چند مثالیں دیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2023, 'n', 'اسائنمنٹ آپریٹر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2024, 'n', 'اسائنمنٹ اسائنمنٹ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2025, 'n', '<span dir=''rtl''> CLEAR اور CLS کی کمانڈ میں کیا فرق ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2026, 'n', 'بیسک میں اہم فنکشن کیز کے کام بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2027, 'n', 'کنٹرول سٹرکچر کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2028, 'n', 'کنٹرول کے ٹرانسفر سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2029, 'n', 'کنٹرول کے غیر مشروط اور مشروط ٹرانسفر میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2030, 'n', '<span dir=''rtl''> \r\nIF...THEN...ELSE سٹیٹمنٹ کو لکھنے کا طریقہ بیان کریں۔\r\n</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2031, 'n', 'لُوپ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2032, 'n', '<span dir=''rtl''> \r\nFOR...NEXT  لُوپ کو لکھنے کا طریقہ بیان کریں۔\r\n</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2033, 'n', '<span dir=''rtl''> \r\nFOR...NEXT اور WHILE..WEND لُوپ میں کیا فرق ہے؟  </span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2034, 'n', 'کنٹرول ویری ایبل سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2035, 'n', 'اگر <span dir=''rtl''> \r\nFOR...NEXT میں STEP کا استعمال نہ کیا جائے تو لُوپ چلنے کے بعد کنٹرول ویری ایبل میں کیا تبدیلی آتی ہے؟</span> ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2036, 'n', 'آؤٹر اور انر لُوپ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2037, 'n', 'نیسٹڈ لُوپ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2038, 'n', 'ایرے سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2039, 'n', 'ایرے میں سب سکرپٹ ویری ایبل کا کیا استعمال ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2040, 'n', 'ایرے سے تین استعمال بتائیں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2041, 'n', 'ایرے ڈیکلئریشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2042, 'n', '<span dir=''rtl''> \r\nDIM سٹیٹمنٹ سے کیا مراد ہے؟\r\n</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2043, 'n', 'ایرے کی فلنگ اور پرنٹنگ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2044, 'n', '<span dir=''rtl''>1D ایرے سے کیا مراد ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2045, 'n', '<span dir=''rtl''>2D ایرے سے کیا مراد ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2046, 'n', '<span dir=''rtl''> \r\n1-D ایرے اور 2-D ایرے میں فرق بیان کریں\r\n</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2047, 'n', 'بیسک میں بڑے سائز کی ایرے کا اظہار کیسے کیا جاتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2048, 'n', 'ایرے کی مینی پولیشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2049, 'n', 'سب پروگرام سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2050, 'n', 'سب پروگرام سے کیا فائدہ حاصل ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2051, 'n', 'سب پروگرامز کی مختلف اقسام کون کونسی ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2052, 'n', 'فنکشن سب پروگرام سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2053, 'n', 'بِلٹ اِن فنکشن سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2054, 'n', 'پیرامیٹرز کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2055, 'n', 'نومیرک فنکشنز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2056, 'n', 'سٹرنگ فنکشنز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2057, 'n', 'یوزر ڈیفائنڈ فنکشنز سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2058, 'n', 'یوزر ڈیفائنڈ اور بلٹ ان فنکشن میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2059, 'n', 'سب روٹین سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2060, 'n', 'سب روٹین اور فنکشن میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2061, 'n', 'فائل کی تعریف کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2062, 'n', 'فائل ہینڈلنگ سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2063, 'n', 'ڈیٹا فائل اور پروگرام فائل میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2064, 'n', 'سیکوینشل ایکسس میتھڈ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2065, 'n', 'رینڈم ایکسس میتھڈ کیا ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2066, 'n', 'سیکونشل اور رینڈم فائل میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2067, 'n', 'سیکوینشل فائل کو کتنے موڈ میں کھولا جا سکتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2068, 'n', '<span dir=''rtl''>\r\nGOSUB اور RETURN سٹیٹمنٹ کا کیا استعمال ہے؟\r\n</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2069, 'n', 'گرافکس سے کیا مراد ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2070, 'n', 'کو آرڈی نیٹ کیا ہوتے ہیں؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2071, 'n', 'بیسک میں ٹیکسٹ موڈ کس لئے استعمال ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2072, 'n', 'بیسک میں میڈیم ریزولوشن گرافک موڈ کس لئے استعمال ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2073, 'n', 'بیسک لینگویج میں <span dir=''rtl''> SCREEN </span> سٹیٹمنٹ کس لئے استعمال ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2074, 'n', 'بیسک لینگویج میں <span dir=''rtl''> PALLETE </span> سٹیٹمنٹ کس لئے استعمال ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2075, 'n', 'بیسک لینگویج میں <span dir=''rtl''> PSET </span> سٹیٹمنٹ کس لئے استعمال ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2076, 'n', 'بیسک لینگویج میں <span dir=''rtl''> CIRCLE </span> سٹیٹمنٹ کس لئے استعمال ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2077, 'n', 'بیسک لینگویج میں <span dir=''rtl''> DRAW </span> سٹیٹمنٹ کس لئے استعمال ہوتی ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2078, 'n', 'بیسک میں ہائی ریزولوشن گرافک موڈ کس لئے استعمال ہوتا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2079, 'n', 'مائیکروسافٹ ورڈ کیا ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2080, 'n', 'فاتمیٹنگ ٹُول بار اور سٹینڈرڈ ٹُول بار میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2081, 'n', 'ڈاکیومنٹ کے مختلف ویوٴز کے نام تحریر کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2082, 'n', '<span dir=''rtl''> Save اور Save As کمانڈ میں کیا فرق ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2083, 'n', '<span dir=''rtl''> CUT اور COPYکمانڈ میں کیا فرق ہے؟</span>', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2084, 'n', 'مائیکروسافٹ ورڈ میں کلپ بورڈ کا استعمال بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2085, 'n', 'مائیکروسافٹ ورڈ میں فارمیٹنگ کا استعمال بیان کریں۔', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2086, 'n', 'مائیکروسافٹ ورڈ میں الائنمنٹ اور انڈینٹ میں کیا فرق ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2087, 'n', 'پرنٹ پری ویو کا کیا فائدہ ہے؟', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2088, 'n', 'ایم ایس ورڈ کس کمپنی نے بنایا ہے؟', 'mcq', 'مائیکروسافٹ', 'نوول', 'لوٹس', 'کورل', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2089, 'n', 'سب سے مقبول ورڈ پراسیسنگ سافٹ وئیر ہے۔', 'mcq', 'مائیکروسافٹ ورڈ', 'ورڈ سٹار', 'نوٹ پیڈ', 'ورڈ پرفیکٹ', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2090, 'n', 'ڈاکیومنٹیشن فراہم کرنے والا سافٹ وئیر کہلاتا ہے۔', 'mcq', 'ورڈ پراسیسر', 'ونڈوز', 'سپریڈشیٹ', 'ملٹی میڈیا', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2091, 'n', 'ورڈ پراسیسنگ کے عمل میں شامل ہے۔', 'mcq', 'تمام', 'ٹیکسٹ داخل کرنا', 'ٹیکسٹ تبدیل کرنا', 'ٹیکسٹ فارمیٹ کرنا', '##', 'تمام', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2092, 'n', 'ورڈ پراسیسنگ سافٹ وئیر کیا بنانے کیلئے استعمال ہوتا ہے؟', 'mcq', 'تمام', 'رپورٹ', 'خطوط', 'لیبل', '##', 'تمام', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2093, 'n', 'مینیو میں کیا ہوتا ہے؟', 'mcq', 'کمانڈز', 'بٹن', 'ٹائٹل', 'علامتیں', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2094, 'n', 'سٹینڈرڈ ٹُول بار عموماّ کس کے نیچے ہوتا ہے؟', 'mcq', 'مینیو بار', 'سٹیٹس بار', 'سکرول بار', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2095, 'n', 'ڈاکیومنٹ میں ایک جگہ سے دوسری جگہ جانے کیلئے استعمال ہوتا ہے۔', 'mcq', 'تمام', 'سکرول بار', 'ایروکیز', 'ماؤس پوائنٹر', '##', 'تمام', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2096, 'n', 'ڈاکیومنٹ کا نام کس پر ظاہر ہوتا ہے؟', 'mcq', 'سٹیٹس بار', 'ٹُول بار', 'ٹائٹل بار', 'سٹینڈرڈ بار', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2097, 'n', 'درج ذیل میں سے کونسی آپشن مائیکروسافٹ ورڈ میں صفحہ کو مختلف حصوں میں تقسیم کرتی ہے؟', 'mcq', 'کالم', 'ٹیبل', 'قطار', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2098, 'n', 'مائیکروسافٹ ورڈ میں <span dir=''rtl''>F1</span> بٹن کس مقصد کیلئے استعمال ہوتا ہے؟', 'mcq', 'مدد', 'فونٹ', 'رنگ', 'تلاش', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2099, 'n', 'ایم ایس ورڈ میں جیومیٹری اشکال بنانے کیلئے استعمال ہوتا ہے۔', 'mcq', 'آٹو شیپس', 'ورڈ آرٹ', 'شیپس', 'پینٹ برش', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2100, 'n', 'ڈاکیومنٹ میں بار بار استعمال ہونیوالے ٹیکسٹ کو محفوظ کرنا چاہیے ، بذریعہ', 'mcq', 'آٹو سیو', 'آٹو فارمیٹ', 'آٹوگراف', 'آٹو ٹیکسٹ', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2101, 'n', 'ورڈ میں ڈاکیومنٹ کی ایکسٹینشن ہوتی ہے۔', 'mcq', '<span dir=''rtl''>.doc</span>', '<span dir=''rtl''>.dot</span>', '<span dir=''rtl''>.wpd</span>', '<span dir=''rtl''>.xlc</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2102, 'n', 'فائل مینیو میں سے کونسی آپشن ورڈ میں کھلے ہوئے ڈاکیومنٹ کو بند کرنے کیلئے استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>Close</span>', '<span dir=''rtl''>Quit</span>', '<span dir=''rtl''>Exit</span>', '<span dir=''rtl''>New</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2103, 'n', '<span dir=''rtl''>Save As کمانڈ کیلئے شارٹ کٹ کی کونسی ہے؟</span>', 'mcq', '<span dir=''rtl''>F12</span>', '<span dir=''rtl''>F5</span>', '<span dir=''rtl''>Ctrl+F5</span>', '<span dir=''rtl''>Ctrl+G</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2104, 'n', 'ایم ایس ورڈ میں فائل کا نام تبدیل کرنے کیلئے شارٹ کٹ کی استعمال ہوتی ہے۔', 'mcq', '<span dir=''rtl''>F4</span>', '<span dir=''rtl''>F5</span>', '<span dir=''rtl''>Ctrl+F4</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2105, 'n', 'پہلے سے محفوظ شدہ ڈاکیومنٹ کو کھولنے کیلئے کونسی شارٹ کٹ کی استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>Ctrl+O</span>', '<span dir=''rtl''>Ctrl+P</span>', '<span dir=''rtl''>Ctrl+Shift+O</span>', '<span dir=''rtl''>Alt+O</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2106, 'n', 'جب مائیکروسافٹ ورڈ کھولا جاتا ہے تو خودبخودظاہر ہونیوالے ڈاکیومنٹ کا نام ہوتا ہے۔ ', 'mcq', '<span dir=''rtl''>Document1</span>', '<span dir=''rtl''>Word1</span>', '<span dir=''rtl''>WPD1</span>', '<span dir=''rtl''>File1</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2107, 'n', '<span dir=''rtl''>ایم ایس ورڈ میں Save آپشن کس مینیو پر ہوتا ہے؟</span>', 'mcq', 'فائل مینیو', 'ویو مینیو', 'ٹُولز مینیو', 'ایڈٹ مینیو', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2108, 'n', 'کلپ بورڈ محفوظ کرتا ہے۔', 'mcq', 'کاپی کیا گیا ٹیکسٹ', 'ٹئپ کیا گیا ٹیکسٹ', 'ختم کیا گیا ٹیکسٹ', 'فارمیٹ کیا گیا ٹیکسٹ', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2109, 'n', 'کاپی آپشن استعمال ہوتی ہے۔', 'mcq', 'ٹیکسٹ کاپی کرنے کیلئے', 'ٹیکسٹ کو حرکت دینے کیلئے', 'ٹیکسٹ دوبارہ لکھنے کیلئے', 'ٹیکسٹ حتم کرنے کیلئے', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2110, 'n', 'کٹ ، کاپی اور پیسٹ کی شارٹ کیز ہیں', 'mcq', '<span dir=''rtl''>Ctrl+X, Ctrl+C, Ctrl+V</span>', '<span dir=''rtl''>Ctrl+Z, Ctrl+C, Ctrl+P</span>', '<span dir=''rtl''>Ctrl+C, Ctrl+Y, Ctrl+P</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2111, 'n', 'ٹیکسٹ کو بولڈ کرنے کیلئے کونسی شارٹ کی استعمال ہوتی ہےِ؟', 'mcq', '<span dir=''rtl''>Ctrl+B</span>', '<span dir=''rtl''>Ctrl+D</span>', '<span dir=''rtl''>Ctrl+Shift+B</span>', '<span dir=''rtl''>Ctrl+Alt+B</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2112, 'n', 'فونٹ کا رنگ ، سائز اور سٹائل وغیرہ بدلنے کا عمل کہلاتا ہے۔', 'mcq', 'فارمیٹنگ', 'سٹائلنگ', 'ٹائپنگ', 'کمپوزنگ', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2113, 'n', 'درج ذیل میں سے کس طریقے سے ٹیکسٹ کو الائن نہیں کیا جا سکتا؟', 'mcq', 'اوپر', 'دائیں', 'سنٹر', 'بائیں', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2114, 'n', 'ڈاکیومنٹ میں ٹیکسٹ کو دائیں اور بائیں دونوں جانِب سے ایک جیسا رکھنے کیلئے کونسی آپشن استعمال ہوتی ہے؟', 'mcq', 'جسٹی فائی', 'بائیں', 'سنٹر', 'دائیں', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2115, 'n', 'مائیکروسافٹ ورڈ میں غلط سپیلنگ والے الفاظ کے نیچے کیا ظاہر ہوتا ہے؟', 'mcq', 'سرخ لائن', 'نیلی لائن', 'سبز لائن', 'پیلی لائن', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2116, 'n', 'مائیکروسافٹ ورڈ میں گرامر کی غلطیوں کے نیچے ظاہر ہوتا ہے۔', 'mcq', 'سبز لائن', 'نیلی لائن', 'سرخ لائن', 'پیلی لائن', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2117, 'n', 'سپیلنگ اینڈ گرامر کے لئے شارٹ کی ہے۔', 'mcq', '<span dir=''rtl''>F7</span>', '<span dir=''rtl''>F2</span>', '<span dir=''rtl''>F8</span>', '<span dir=''rtl''>F3</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2118, 'n', 'پکسل مخفف ہے', 'mcq', 'پکچر ایلیمنٹ', 'پیج ایڈٹ', 'پلیس ایڈٹ', 'پکچر سائن', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2119, 'n', 'تصویر کی شفافیت سے مراد ہے۔', 'mcq', 'ریزولوشن', 'ڈرائنگ', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2120, 'n', '<span dir=''rtl''>PSET(50,150)</span> سٹیٹمنٹ سکرین کے کس جانب نقطہ بنائے گی؟\r\n', 'mcq', 'بائیں جانب نیچے', 'بائیں جانب اوپر', 'دائیں جانب اوپر', 'وسط میں', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2121, 'n', 'پیلٹ 1 میں کوڈ 2 کا رنگ ہے۔', 'mcq', 'نیلا', 'سفید', 'قرمزی', 'سُرخ', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2122, 'n', '<span dir=''rtl''>DRAW سٹیٹمنٹ U کی کمانڈ کس جانب حرکت کیلئے استعمال ہوتی ہے؟</span>', 'mcq', 'اوپر', 'دائیں', 'بائیں', 'نیچے', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2123, 'n', 'اِن میں سے کونسی گرافک موڈ نہیں؟', 'mcq', '<span dir=''rtl''>COLOR</span>', '<span dir=''rtl''>LINE</span>', '<span dir=''rtl''>PSET</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2124, 'n', 'بیسک میں موجود بیک گراؤنڈ کلر کی تعداد ہے۔', 'mcq', '16', '12', '8', '4', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2125, 'n', 'کونسا فنکشن بیسک میں آؤٹ پُٹ دینے کے طریقے کو تبدیل کرتا ہے۔', 'mcq', '<span dir=''rtl''>SCREEN</span>', '<span dir=''rtl''>PRINT</span>', '<span dir=''rtl''>LEFT$</span>', '<span dir=''rtl''>ABS</span>', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2126, 'n', '<span dir=''rtl''>کلر مونیٹر پر MODES  کی اقسام ہیں۔</span>', 'mcq', '5', '2', '3', '4', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2127, 'n', 'عام طور پر کمپیوٹر مونیٹر کی سکرین ہوتی ہے۔', 'mcq', 'ٹیکسٹ موڈ میں', 'گرافک موڈ میں', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2128, 'n', 'درج ذیل سٹیٹمنٹ سے لائن کھینچی جاتی ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>LINE</span>', '<span dir=''rtl''>DRAW</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2129, 'n', '<span dir=''rtl''>DRAW سٹیٹمنٹ میں شروع کا حرف "B" استعمال ہوتا ہے۔</span>', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'بلاک بنانے کیلئے', 'بلیک مارک کے ساتھ حرکت کیلئے', 'بلیو مارک کے ساتھ حرکت کیلئے', '<span dir=''rtl''>a اور b دونوں</span>', 'بلیو مارک کے ساتھ حرکت کیلئے', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2130, 'n', 'سُرخ، سبز اور براؤن رنگوں کا سیٹ دیا گیا ہے۔', 'mcq', 'پیلٹ 0 میں', 'پیلٹ 1 میں', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2131, 'n', '<span dir=''rtl''>CIRCLE</span> سٹیٹمنٹ کی مدد سے ہم مذید کھینچ سکتے ہیں۔', 'mcq', 'بیضوی شکل', 'لائن', 'باکس', '<span dir=''rtl''>PSET</span>', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2132, 'n', 'میڈیم ریزولوشن سکرین موڈ میں فورگراؤنڈ کے کلرز ہیں۔', 'mcq', '1', '2', '4', '16', '##', '##', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2133, 'n', 'ڈبل انڈر لائن کیلئے کونسا شارٹ کٹ استعمال ہوتا ہے؟', 'mcq', '<span dir=''rtl''>Ctrl+Shift+D</span>', '<span dir=''rtl''>Ctrl+]</span>', '<span dir=''rtl''>Ctrl+Shift+M</span>', '<span dir=''rtl''>Shift+F3</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2134, 'n', '<span dir=''rtl''>MS WORD ۔۔۔۔۔۔ بیس پروگرام ہے۔</span>', 'mcq', 'ونڈوز', '<span dir=''rtl''>DOS</span>', 'سسٹم', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2135, 'n', 'درج ذیلمیں سے کونسی بار ایپلی کیشنز سافٹ وئیر مہیا کرتی ہے۔', 'mcq', 'سٹیٹس بار', 'مینیو بار', 'ٹُول بار', 'سکرول بار', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2136, 'n', '<span dir=''rtl''>Ctrl+2</span> کیز پریس کریں ۔۔۔۔۔۔ جگہ کیلئے', 'mcq', 'ڈبل', 'سنگل', 'ٹرپل', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2137, 'n', '<span dir=''rtl''>WORD</span> میں موجود ڈاکیومنٹ پرنٹ کیلئے ۔۔۔۔۔ پرنٹ آئیکون کو کلک کریں۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'مینیئولی', 'آٹومیٹک', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2138, 'n', 'پیراگراف کو سلیکٹ کرنے کیلئے استعمال ہوتا ہے۔', 'mcq', 'ڈبل کلک', 'سنگل کلک', 'رائٹ کلک', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2139, 'n', '<span dir=''rtl''>Ctrl+Y</span> استعمال ہوتا ہے۔', 'mcq', 'ڈھونڈنے کیلئے', 'ان ڈو کیلئے', 'پیج بریک کیلئے', 'ری ڈو کیلئے', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2140, 'n', 'کونسی آپشن ایڈٹ مینیو میں نہیں ہوتی۔', 'mcq', 'فونٹ', 'فائنڈ', 'ری ڈو', 'ان ڈو', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2141, 'n', 'سلیکٹڈ ورڈز کو بولڈ کرنے کیلئے کونسا شارٹ کٹ استعمال کرتے ہیں؟', 'mcq', '<span dir=''rtl''>Ctrl+B</span>', '<span dir=''rtl''>Alt+B</span>', '<span dir=''rtl''>Shift+NB</span>', '<span dir=''rtl''>Ctrl+Shift+B</span>', '##', '##', NULL, 00091, 0);
INSERT INTO `questions` VALUES(2142, 'n', 'سکرین پر تصویر جن نقاط کا مجموعہ ہوتی ہے ، کہلاتے ہیں۔', 'mcq', 'پکسلز', 'ڈاٹس', 'پیلٹ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00090, 0);
INSERT INTO `questions` VALUES(2143, 'n', 'طویل پروگرام کو چھوٹے چھوٹے حصوں میں تقسیم کیا جا سکتا ہے، جنہیں کہتے ہیں', 'mcq', 'سب پروگرام', 'اریز', 'فائل', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2144, 'n', 'بیسک میں سب پروگراموں کی اقسام ہیں۔', 'mcq', '2', '1', '3', '4', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2145, 'n', '۔۔۔۔ کو ایک بار لکھا جاتا ہے اور کئی بار چلایا جا سکتا ہے۔', 'mcq', 'سب پروگرام', 'لُوپ', 'ایرے', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2146, 'n', 'درج ذیل میں سے کونسی آپشن بیسک میں فنکشن کی ایک قسم ہے؟', 'mcq', 'دونوں', 'یوزر ڈیفائنڈ', 'بلٹ اِن', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2147, 'n', 'بلٹ اِن فنکشن کا دوسرا نام ہے۔', 'mcq', 'دونوں', 'پری ڈیفائنڈ فنکشن', 'لائبریری فنکشن', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2148, 'n', 'ہر لیگویج کے ساتھ دستیاب ہوتا ہے۔', 'mcq', 'یوزرڈیفائنڈ فنکشن', 'بلٹ اِن فنکشن', 'دونوں', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2149, 'n', '<span dir=''rtl''>INT</span> ہے۔', 'mcq', 'بلٹ اِن فنکشن', 'یوزر ڈیفائنڈ فنکشن', 'لوکل فنکشن', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2150, 'n', 'فنکشن کے متعلق کونسی بات غلط ہے؟', 'mcq', 'فنکش کا کم از کم ایک پیرامیٹر ہونا ضروری ہے۔', 'ایک فنکشن دوسرے فنکشن کو کال کر سکتا ہے۔', 'فنکشن کو پروگرام میں کئی بار کال کیا جا سکتا ہے۔', 'فنکشن ایک قیمت واپس کر سکتا ہے۔', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2151, 'n', 'درج ذیل میں بیسک کے بلٹ اِن فنکشن ہیں، سوائے', 'mcq', '<span dir=''rtl''>SQRT</span>', '<span dir=''rtl''>INT</span>', '<span dir=''rtl''>ABS</span>', '<span dir=''rtl''>RND</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2152, 'n', '<span dir=''rtl''>FIX(-6.83) کا جواب ہے۔</span>', 'mcq', '-6', '0.83', '6.83', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2153, 'n', '<span dir=''rtl''>ABS(-4.58) کا جواب ہے۔</span>', 'mcq', '4.58', '5', '-4', '4', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2154, 'n', '<span dir=''rtl''>SQR(81) کا جواب ہے۔</span>', 'mcq', '9', '3', '27', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2155, 'n', '<span dir=''rtl''>LEN("HELLO WORLD") کا جواب ہے۔</span>', 'mcq', '11', '9', '10', '12', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2156, 'n', '<span dir=''rtl''>LEFT$("HELLO WORLD",5) کا جواب ہے۔</span>', 'mcq', '<span dir=''rtl''>HELLO</span>', '<span dir=''rtl''>HWorld</span>', '<span dir=''rtl''>WORLD</span>', '<span dir=''rtl''>HELL</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2157, 'n', '<span dir=''rtl''>MID$("Hello World",1,5) کا جواب ہے۔</span>', 'mcq', '<span dir=''rtl''>Hello</span>', '<span dir=''rtl''>Hellow</span>', '<span dir=''rtl''>Hell</span>', '<span dir=''rtl''>World</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2158, 'n', 'فنکشن کو فراہم کی جانے والی قیمت کہلاتی ہے۔ ', 'mcq', 'دونوں', 'آرگومنٹ', 'پیرامیٹر', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2159, 'n', 'فنکشن بنانے کیلئے کونسی سٹیٹمنٹ استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>DEF FN</span>', '<span dir=''rtl''>DEF</span>', '<span dir=''rtl''>DEF FUN</span>', '<span dir=''rtl''>FU DEF</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2160, 'n', '<span dir=''rtl''>DEF FN کس موڈ میں استعمال کی جا سکتی ہے؟</span>', 'mcq', 'اِن ڈائریکٹ موڈ', 'ڈائریکٹ موڈ', 'دونوں', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2161, 'n', 'کس سٹیٹمنٹ کے ذریعے سب روٹین استعمال کی جاتی ہے؟', 'mcq', 'دونوں', '<span dir=''rtl''>GOSUB</span>', '<span dir=''rtl''>RETURN</span>', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2162, 'n', '<span dir=''rtl''>RETURN کنٹرول کو کس جگہ منتقل کرتی ہے؟</span>', 'mcq', '<span dir=''rtl''>GOSUB سٹیٹمنٹ سے اگلی لائن پر</span>', '<span dir=''rtl''>GOSUB سٹیٹمنٹ پر</span>', '<span dir=''rtl''>GOSUB سٹیٹمنٹ سے پچھلی لائن پر</span>', 'پروگرام کے شروع میں', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2163, 'n', 'عموماً سب روٹین کی آخری سٹیٹمنٹ ہوتی ہے۔', 'mcq', '<span dir=''rtl''>RETURN</span>', '<span dir=''rtl''>GOTO</span>', '<span dir=''rtl''>GOSUB</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2164, 'n', 'فائلیں محفوظ کرنے کی جگہ ہے۔', 'mcq', 'ہارڈ ڈسک', 'ریم', 'روم', 'تمام', '##', 'تمام', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2165, 'n', 'متعلقہ فیلڈز کا مجموعہ کہلاتا ہے۔', 'mcq', 'ریکارڈ', 'فائل', 'حروف', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2166, 'n', 'متعلقہ حروف کا مجموعہ کہلاتا ہے۔', 'mcq', 'فیلڈ', 'ریکارڈ', 'فائل', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2167, 'n', 'سافٹ وئیر کی ہدایات پر مشتمل فائل کہلاتی ہے۔', 'mcq', 'پروگرام فائل', 'ڈیٹا فائل', 'دونوں', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2168, 'n', 'کس عمل میں مندرجات تک رسائی ایک ترتیب سے کی جاتی ہے۔', 'mcq', 'سیکوینشل ایکسس', 'ریڈ اونلی ایکسس', 'رینڈیم ایکسس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2174, 'n', '<span dir=''rtl''>LEFT$("Pakistan",3)</span> برابر ہے۔۔۔۔ کے', 'mcq', '<span dir=''rtl''>Pa</span>', '<span dir=''rtl''>Pak</span>', '<span dir=''rtl''>PAK</span>', '<span dir=''rtl''>Kis</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2170, 'n', 'درج ذیل میں سے کونسی آپشن <span dir=''rtl''>OPEN</span> سٹیٹمنٹ کے ساتھ استعمال ہونیوالا موڈ نہیں ہے۔', 'mcq', '<span dir=''rtl''>READ</span>', '<span dir=''rtl''>OUTPUT</span>', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>APPEND</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2171, 'n', 'کس کی ورڈ کو استعمال کرتے ہوئے <span dir=''rtl''>OPEN</span> سٹیٹمنٹ میں فائل کو پڑھنے کیلئے کھولا جاتا ہے؟ ', 'mcq', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>OUTPUT</span>', '<span dir=''rtl''>READ</span>', '<span dir=''rtl''>APPEND</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2172, 'n', 'بیسک میں یوزرڈیفائنڈ فنکشن کو کہتے ہیں۔', 'mcq', 'پروسیجر', 'فائل', 'دونوں', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2173, 'n', 'کونسی سٹیٹمنٹ فائل سے ڈیٹا پڑھنے کیلئے استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>INPUT#</span>', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>READ</span>', '<span dir=''rtl''>DATA</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2175, 'n', 'فنکشن <span dir=''rtl''>INT(-5.7)</span> کا جواب ہے', 'mcq', '-4', '-5', '5', '-6', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2176, 'n', '۔۔۔۔ فنکشن <span dir=''rtl''>ASCII</span> کوڈز کو متبادل کریکٹرز میں تبدیل کرنے کیلئے استعمال ہوتا ہے۔', 'mcq', '<span dir=''rtl''>CHR()</span>', '<span dir=''rtl''>CHAR$()</span>', '<span dir=''rtl''>CHAR</span>', '<span dir=''rtl''>CHR$()</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2177, 'n', '<span dir=''rtl''>TAN(x) برابر ہے۔</span>', 'mcq', '<span dir=''rtl''>SIN(x) / COS(x)</span>', '<span dir=''rtl''>COS(x) / SIN(x)</span>', '<span dir=''rtl''>COT(x)</span>', '<span dir=''rtl''>SIN(x) / COT(x)</span>', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2178, 'n', '<span dir=''rtl''>SGN(-4)</span> کا آؤٹ پُٹ ہے۔', 'mcq', '<span dir=''rtl''>''-'' Sign</span>', '<span dir=''rtl''>''+'' Sign</span>', '<span dir=''rtl''>0</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2179, 'n', 'ایک فائل اپنے استعمال سے پہلے ان میں سے کسی ایک سٹیٹمنٹ سے ایکٹیویت ہوجاتی ہے۔', 'mcq', '<span dir=''rtl''>READ</span>', '<span dir=''rtl''>WRITE</span>', '<span dir=''rtl''>PRINT</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2180, 'n', 'ایک فائل ۔۔۔ طریقوں سے بہتر طور پر ہینڈل کی جا سکتی ہے۔', 'mcq', '2', '1', '3', '4', '##', '##', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2181, 'n', 'فائل سے معلومات پڑھنے کیلئے اس کھولنا۔۔۔ کہلاتا ہے۔', 'mcq', 'ان پُٹ', 'آؤٹ پُٹ', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00089, 0);
INSERT INTO `questions` VALUES(2182, 'n', 'ایسا متغیر جو ایک جیسا ڈیٹا محفوظ کرے، کہلاتا ہے۔', 'mcq', 'ایرے', 'ملٹی پل ویری ایبل', 'بڑا متغیر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2183, 'n', 'ایرے کے ہر رکن کا انفرادی ۔۔۔۔ ہوتا ہے۔', 'mcq', 'انڈیکس', 'ایکسٹینشن', 'حد', 'تمام', '##', 'تمام', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2184, 'n', 'ایرے کے پیلے رکن کا انڈیکس ہوتا ہے۔', 'mcq', '0', '1', '2', '4', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2185, 'n', 'ایرے کے ہر رکن کا انڈیکس ہوتا ہے۔', 'mcq', 'منفرد', 'ایک جیسا', 'طاق', 'جفت', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2186, 'n', 'ایرے کے  رکن تک رسائی کیلئے ایرے کے نام کے ساتھ ساتعمال ہوتا ہے۔', 'mcq', 'رکن کا انڈیکس', 'رکن کی ڈیٹا ٹائپ', 'رکن کی مقدار', 'رکن کا نام', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2187, 'n', 'ایک ایرے <span dir=''rtl''>N</span> کے تیسرے رکن تک رسائی کیلئے استعمال ہوگا۔', 'mcq', '<span dir=''rtl''>N(2)</span>', '<span dir=''rtl''>N(3)</span>', '<span dir=''rtl''>N(1)</span>', '<span dir=''rtl''>N(4)</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2188, 'n', 'ایک سٹیٹمنٹ <span dir=''rtl''>list(4) </span>میں 4 کی مقدار ظاہر کرتی ہے۔ ', 'mcq', 'انڈیکس', 'ایرے کا سائز', 'ایرے کا رکن', 'متغیر', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2189, 'n', 'ایک سٹیٹمنٹ <span dir=''rtl''>DIM list(15) </span>میموری میں کتنی لوکیشنز بنائی گی؟', 'mcq', '16', '15', '14', '30', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2190, 'n', 'یک سمتی ایرے کا دوسرا نام ہے۔', 'mcq', 'تمام', 'ویکٹر ایرے', '<span dir=''rtl''>1-D ایرے</span>', 'لینئیر ایرے', '##', 'تمام', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2191, 'n', '<span dir=''rtl''>11 ارکان سے بڑا ایرے بنانے کیلئے کونسی سٹیٹمنٹ استعمال ہوگی؟</span>', 'mcq', '<span dir=''rtl''>DIM</span>', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>PRINT</span>', '<span dir=''rtl''>LET</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2192, 'n', 'دو سمتی ایرے کا دوسرا نام ہے۔', 'mcq', 'دونوں', 'ٹیبل', 'قالب', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2193, 'n', 'دو سمتی ایرے کو سمجھا جا سکتا ہے۔', 'mcq', 'قطار اور کالموں کا مجموعہ', 'ایک قطار', 'ایک کالم', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2194, 'n', 'ایک ایرے <span dir=''rtl''>N(1000) </span>میں کتنے ارکان ہیں؟', 'mcq', '1001', '0', '999', '1000', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2195, 'n', 'درج ذیل میں سے کونسا ایرے چار قطاروں اور تین کالموں پر مشتمل ہوتا ہے؟', 'mcq', '<span dir=''rtl''>A(3,2)</span>', '<span dir=''rtl''>A(2,3)</span>', '<span dir=''rtl''>A(4,3)</span>', '<span dir=''rtl''>A(8,6)</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2196, 'n', 'چار قطاروں اور تین کالموں پر مشتمل ایرے کے آخری رکن کو ظاہر کرنے کا طریقہ ہے۔', 'mcq', '<span dir=''rtl''>A(3,2)</span>', '<span dir=''rtl''>A(2,3)</span>', '<span dir=''rtl''>A(4,3)</span>', '<span dir=''rtl''>A(8,6)</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2197, 'n', 'چار قطاروں اور تین کالموں پر مشتمل ایرے کے پہلے رکن کو ظاہر کرنے کا طریقہ ہے۔', 'mcq', '<span dir=''rtl''>A(0,0)</span>', '<span dir=''rtl''>A(2,3)</span>', '<span dir=''rtl''>A(1،1)</span>', '<span dir=''rtl''>A(4,3)</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2198, 'n', 'ایرے کی ۔۔۔ اقسام ہیں۔', 'mcq', '2', '1', '3', '4', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2199, 'n', 'سٹیٹمنٹ <span dir=''rtl''>X(30) </span>۔۔۔ میموری لوکیشنز کو محفوظ کرتی ہے۔', 'mcq', '31', '29', '30', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2200, 'n', 'دو سمتی ایرے میں اگر سمت نہ دی گئی ہو تو ایرے میں ۔۔۔۔ سے ذیدہ ارکان نہیں ہونے چاہیئں۔', 'mcq', '10', '100', '110', '121', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2201, 'n', 'ایرے کی سب سے بری قیمت لینے کیلئے سٹیٹمنٹ استعمال ہوتی ہے۔', 'mcq', 'کوئی نہیں', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>READ...DATA</span>', '<span dir=''rtl''>ON.. ERROR... GOTO</span>', '##', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2202, 'n', 'ان میں سے کونسا سبسکرپٹ درست نہیں ', 'mcq', '<span dir=''rtl''>A(-2)</span>', '<span dir=''rtl''>A(2)</span>', '<span dir=''rtl''>B(4)</span>', '<span dir=''rtl''>NUM(10)</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2203, 'n', 'ایک ایرے کو ظاہر کرتے ہیں، اس کے', 'mcq', 'سب سکرپٹ سے', 'ایرے سے', 'اوبجیکٹ سے', 'رکن کے نام سے', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2204, 'n', 'سمتی سٹیٹمنٹ کیلئے کی ورڈ ۔۔۔ استعمال ہوتا ہے۔', 'mcq', '<span dir=''rtl''>DIM</span>', '<span dir=''rtl''>DM</span>\r\n', '<span dir=''rtl''>DS</span>', '<span dir=''rtl''>DMS</span>', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2205, 'n', 'ایک سمت کے ارکان کی ذیادہ سے ذیادہ تعداد ہے', 'mcq', '255', '10', '32767', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2206, 'n', 'دو سبسکرپٹ ویری ایبل <span dir=''rtl''>p﴾3,2﴿ </span>....میں موجود ڈیٹا کے رکن کو بیان کرتا ہے۔', 'mcq', 'کالم دوسرا ، قطار تیسری', 'کالم تیسرا، قطار دوسری', 'کالم دوسرا ، قطار دوسری', 'کالم تیسرا، قطار تیسری', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2207, 'n', 'سٹیٹمنٹ <span dir=''rtl''>DIM C(30,50)</span> محفوظ کرتی ہے۔', 'mcq', '1500 مقامات', '80 مقامات', '1800 مقامات', '150 مقامات', '##', '##', NULL, 00088, 0);
INSERT INTO `questions` VALUES(2208, 'n', 'بیسک میں کنٹرول سٹرکچر کی اقسام ہیں۔', 'mcq', '3', '1', '5', '7', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2209, 'n', 'درج ذیل میں سے کونسا آپشن بیسک کا کنٹرول سٹرکچر ہے؟', 'mcq', 'تمام', 'لُوپ', 'ترتیب', 'چناؤ', '##', 'تمام', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2210, 'n', 'کنٹرول کے غیر مشروط ٹرانسفر کیلئے استعمال ہونیوالی ہدایت ہے', 'mcq', '<span dir=''rtl''>GOTO</span>', '<span dir=''rtl''>IF</span>', '<span dir=''rtl''>For</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2211, 'n', 'کونسا کنٹول سٹرکچر ایک کے بعد دوسری ہدایت چلانے کیلئے استعمال ہوتا ہے؟', 'mcq', 'ترتیب', 'چناؤ', 'لُوپ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2212, 'n', 'پروگرام چلنے کے دوران ہونیوالی غلطی تلاش کرنے کیلئے کونسی ہدایت استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>ON ERROR GOTO</span>', '<span dir=''rtl''>ON...GOTO</span>', '<span dir=''rtl''>GOTO</span>', '<span dir=''rtl''>IF..THEN</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2213, 'n', 'بیسک میں ایرر ہینڈلرز کو آن کرنے کیلئے کونسی ہدایت استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>ON ERROR GOTO</span>', '<span dir=''rtl''>ON...GOTO</span>', '<span dir=''rtl''>IF..THEN</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2214, 'n', '<span dir=''rtl''>ON ERROR GOTO </span>سٹیٹمنٹ سے متعلقہ متغیرات ہیں۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>ERR</span>', '<span dir=''rtl''>EOF</span>', '<span dir=''rtl''>ERL</span>', '<span dir=''rtl''>EOF</span>', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2215, 'n', '<span dir=''rtl''>ON ERROR GOTO کیا تلاش کرنے کیلئے استعمال ہوتی ہے؟</span>', 'mcq', 'رن ٹائم ایرر', 'منقطی ایرر', 'سنٹیکس ایرر', 'تمام', '##', 'تمام', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2216, 'n', 'بیسک میں کونسا کنٹرول سٹرکچر فیصلہ کرنے کیلئے استعمال ہوتا ہے؟', 'mcq', 'چناؤ', 'ترتیب', 'تکرار', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2217, 'n', 'ریلیشنل آپریٹرز استعمال کرنے والا ایکسپریشن کہلاتا ہے۔', 'mcq', 'ریلیشن', 'شرط', 'فیصلہ', 'سیریز', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2218, 'n', 'ایرر ہینڈلنگ روٹین سے باہر نکلنے کیلئے کونسی سٹیٹمنٹ استعمال ہوتی ہے؟', 'mcq', 'تمام', '<span dir=''rtl''>END</span>', '<span dir=''rtl''>RESUME</span>', '<span dir=''rtl''>RESUME NEXT</span>', '##', 'تمام', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2219, 'n', 'درج ذیل میں سے کونسا کنٹرول سٹرکچر فیصلہ کرنے کیلئے استعمال ہوتا ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>FOR</span>', '<span dir=''rtl''>IF..THEN</span>', '<span dir=''rtl''>IF..THEN..ELSE</span>', '<span dir=''rtl''>FOR</span>', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2220, 'n', '<span dir=''rtl''>IF سٹیٹمنٹ کیساتھ دو آپشنز دینے کیلئے کونسا کی ورڈ استعمال ہوتا ہے؟</span>', 'mcq', '<span dir=''rtl''>ELSE</span>', '<span dir=''rtl''>IF</span>', '<span dir=''rtl''>THEN</span>', '<span dir=''rtl''>WHILE</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2221, 'n', '<span dir=''rtl''>IF</span> سٹیٹمنٹ کے بعد کونسی آپشن استعمال ہونی چاہیے؟', 'mcq', '<span dir=''rtl''>THEN</span>', '<span dir=''rtl''>END</span>', '<span dir=''rtl''>END IF</span>', '<span dir=''rtl''>ELSE</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2222, 'n', 'کونسا کنٹرول سٹرکچر شرط کے درست ہونے پر ایک آپشن اور غلط ہونے پر دوسرا آپشن استعمال کرتا ہے؟', 'mcq', '<span dir=''rtl''>IF THEN ELSE</span>', '<span dir=''rtl''>IF THEN</span>', '<span dir=''rtl''>GOTO</span>', '<span dir=''rtl''>Try..Catch</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2223, 'n', '<span dir=''rtl''>IF hrs>=24 </span> میں استعمال ہونیوالا آپریٹر کہلاتا ہے۔', 'mcq', 'ریلیشنل آپریٹر', 'منطقی آپریٹر', 'حسابی آپریٹر', 'ریاضی کا آپریٹر', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2224, 'n', '<span dir=''rtl''>IF </span> سٹیٹمنٹ میں شرط غلط ہو تو اس کا جواب ہوتا ہے۔', 'mcq', '0', '1', '2', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2225, 'n', '<span dir=''rtl''>IF </span> سٹیٹمنٹ میں شرط درست ہو تو اس کا جواب ہوتا ہے۔', 'mcq', '1', '0', '2', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2226, 'n', 'درج ذیل میں منطقی آپریٹر ہے۔', 'mcq', 'تمام', '<span dir=''rtl''>AND</span>', '<span dir=''rtl''>NOT</span>', '<span dir=''rtl''>OR</span>', '##', 'تمام', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2227, 'n', 'ایسا کنٹرول سٹرکچر جو ایک ہدایت یا یدایات کے مجموعہ  کو بار بار چلاتا ہے۔', 'mcq', 'لُوپ', 'چناؤ', 'ترتیب', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2228, 'n', 'بیسک میں لُوپس کی تعداد ہے۔', 'mcq', '2', '4', '5', '6', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2229, 'n', 'درج ذیل میں سے لُوپ سٹیٹمنٹ ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>WHILE..WEND</span>', '<span dir=''rtl''>IF..THEN..ELSE</span>', '<span dir=''rtl''>FOR..NEXT</span>', '<span dir=''rtl''>IF..THEN..ELSE</span>', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2230, 'n', 'لُوپ کا ایک چکر کہلاتا ہے۔', 'mcq', 'آئٹریشن', 'ٹیسٹ', 'سائیکل', 'وقفہ', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2231, 'n', '<span dir=''rtl''>while </span> لُوپ کا اختتام ہے۔', 'mcq', '<span dir=''rtl''>WEND</span>', '<span dir=''rtl''>END</span>', '<span dir=''rtl''>NEXT</span>', '<span dir=''rtl''>STOP</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2232, 'n', 'اگر ہدایات کے چلنے کی تعداد کا پہلے سے پتہ ہو تو کونسی لُوپ بہتر ہے؟', 'mcq', '<span dir=''rtl''>FOR..NEXT</span>', '<span dir=''rtl''>WHILE..WEND</span>', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2233, 'n', 'کونسا لفظ کاؤنٹر ویری ایبل میں مطلوبہ مقدار کا اضافہ یا کمی کرنے کیلئے استعمال ہوتا ہے؟', 'mcq', '<span dir=''rtl''>STEP</span>', '<span dir=''rtl''>SKIP</span>', '<span dir=''rtl''>INTERVAL</span>', '<span dir=''rtl''>NEXT</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2234, 'n', '<span dir=''rtl''>FOR..NEXT لوپ میں STEP کا لفظ استعمال نہ کیا جائے تو کاؤنٹر ویری ایبل میں کتنا اضافہ ہوتا ہے؟</span>', 'mcq', '1', '0', '10', '5', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2235, 'n', '<span dir=''rtl''>FOR..NEXT </span> لُوپ کے کاؤنٹر ویری ایبل میں تبدیل ہوسکتی ہے۔', 'mcq', 'کوئی نہیں', 'صرف مثبت', 'صرف منفی', 'دونوں', 'دونوں', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2236, 'n', 'اگر ہدایات کے چلنے کی تعداد کا پہلے سے پتہ نہ ہو تو کونسی لُوپ بہتر ہوگی؟', 'mcq', '<span dir=''rtl''>WHILE..WEND</span>', '<span dir=''rtl''>FOR..NEXT</span>', '<span dir=''rtl''>FOR..WHILE</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2237, 'n', 'لُوپ کے اندر لُوپ کہلاتی ہے۔', 'mcq', 'نیسٹڈ لُوپ', 'پیچیدہ لُوپ', 'لامتناہی لُوپ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2238, 'n', 'ان میں سے کونسا لوجیکل آپریٹر نہیں ہے؟', 'mcq', '<span dir=''rtl''>NETHER</span>', '<span dir=''rtl''>AND</span>', '<span dir=''rtl''>OR</span>', '<span dir=''rtl''>NOT</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2239, 'n', 'ایرر ہینڈلنگ روٹین سے نکلنے کیلئے ان میں سے کونسا آپشن استعمال نہیں ہوسکتا؟', 'mcq', '<span dir=''rtl''>STOP</span>', '<span dir=''rtl''>RESUME</span>', '<span dir=''rtl''>RESUME NEXT</span>', '<span dir=''rtl''>ENDspan>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2240, 'n', 'اِن میں سے کونسی ملٹی برانچنگ سٹیٹمنٹ ہے؟', 'mcq', '<span dir=''rtl''>ON...GOTO</span>', '<span dir=''rtl''>IF..ELSE</span>', '<span dir=''rtl''>GOTO</span>', '<span dir=''rtl''>ON ERROR GOTO line_number</span>', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2241, 'n', 'اگر <span dir=''rtl''>ON...GOTO سٹیٹمنٹ میں کی ورڈ ON  کے مطابق کسی نومیرک ایکسپریشن کی انٹیجر ویلیو 255 سے زیادہ ہوتو کس قسم کی ایرر واقع ہوتی ہے؟</span>', 'mcq', 'رن ٹائم ایرر', 'لوجیکل ایرر', 'سنٹیکس ایرر', ' یہ ایک ایرر نہیں ہے', '##', '##', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2242, 'n', '<span dir=''rtl''>FOR..NEXT</span> سٹیٹمنٹ استعمال کرتے ہیں۔', 'mcq', 'تکرار کیلئے', 'انتخاب کیلئے', 'ترتیب کیلئے', 'تمام', '##', 'تمام', NULL, 00087, 0);
INSERT INTO `questions` VALUES(2243, 'n', 'بیسک لینگویج کس سال میں بنائی گئی؟', 'mcq', '1963', '1976', '1970', '1972', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2244, 'n', 'بیسک لینگویج بنانے والا ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'جان کیمنی', 'تھامس کرٹز', 'وان نیومن', 'وان نیومن', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2245, 'n', '<span dir=''rtl''>IDE مخفف ہے۔</span>', 'mcq', '<span dir=''rtl''>Integrated Development Environment</span>', '<span dir=''rtl''>Internal Disk Error</span>', '<span dir=''rtl''>Input Data Error</span>', '<span dir=''rtl''>Input Desktop Environment</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2246, 'n', 'بیسک میں پروگرام محفوظ کرنے کی شارٹ کٹ کی ہے۔', 'mcq', '<span dir=''rtl''>F4</span>', '<span dir=''rtl''>F1</span>', '<span dir=''rtl''>F2</span>', '<span dir=''rtl''>F3</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2247, 'n', 'بیسک میں پروگرام لوڈ کرنے کی شارٹ کٹ کی ہے۔', 'mcq', '<span dir=''rtl''>F3</span>', '<span dir=''rtl''>F1</span>', '<span dir=''rtl''>F2</span>', '<span dir=''rtl''>F4</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2248, 'n', 'بیسک میں پروگرام چلانے کی شارٹ کٹ کی ہے۔', 'mcq', '<span dir=''rtl''>F2</span>', '<span dir=''rtl''>F1</span>', '<span dir=''rtl''>F3</span>', '<span dir=''rtl''>F4</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2249, 'n', 'بیسک میں ایک لائن میں ذیادہ سے ذیادہ حرف کی تعداد ہے۔', 'mcq', '255', '270', '355', '380', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2250, 'n', 'ایک لائن میں دو یا دو سے زائد ہدایات لکھنے کیلئے انھیں کس علامت سے علیحدہ کیا جاتا ہے۔', 'mcq', 'کولن', 'سیمی کولن', 'کوما', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2251, 'n', 'بیسک میں متغیر کا نام میں ذیادہ سے ذیادہ کتنے حروف ہوسکتے ہیں؟', 'mcq', '40', '50', '60', '80', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2252, 'n', 'بیسک کے کریکٹر سیٹ میں کون کونسے حروف شامل ہیں؟', 'mcq', 'تمام', 'حروفِ تہجی', 'اعداد', 'خصوصی علامات', '##', 'تمام', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2253, 'n', 'بیسک میں ایسے الفاظ جن کے معانی پہلے سے متعیًن کر دیے گئے ہوں، کہلاتے ہیں۔', 'mcq', 'کی ورڈ', 'الفا بیٹ', 'خصوصی علامت', 'تمام', '##', 'تمام', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2254, 'n', 'کی ورڈ کا دوسرا نام ہے۔', 'mcq', 'ریزرو ورڈ', 'خصوصی الفاظ', 'ریمارکس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2255, 'n', 'درج ذیل میں تمام بیسک کے کی ورڈز ہیں سوائے', 'mcq', '<span dir=''rtl''>MARKS</span>', '<span dir=''rtl''>IF</span>', '<span dir=''rtl''>THEN</span>', '<span dir=''rtl''>ELSE</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2256, 'n', 'متغیرات کہاں بنتے ہیں؟', 'mcq', 'ریم میں', 'روم میں', 'ہارڈ ڈسک میں', 'سی پی یو میں', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2257, 'n', 'ایسی میموری لوکیشن جہاں محفوظ ڈیٹا کی قیمت پروگرام چلنے کے دوران  تبدیل نہ ہوسکے، کہلاتی ہے', 'mcq', 'کونسٹنٹ', 'متغیر', 'کی ورڈ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2258, 'n', 'متغیرات کے نام میں درج ذیل میں سے تمام شامل ہوسکتے ہیں سوائے', 'mcq', 'خالی جگہ', 'اعشاریہ', 'اعداد', 'حروف تہجی', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2259, 'n', 'سٹرنگ متغیرات کیلئے ٹائپ ڈکلئریشن حرف کونسا ہے؟', 'mcq', '<span dir=''rtl''>$</span>', '<span dir=''rtl''>#</span>', '<span dir=''rtl''>!</span>', '<span dir=''rtl''>%</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2260, 'n', 'جی ڈبلیو بیسک میں انٹیجر متغیر کتنی بائٹس استعمال کرتا ہے؟', 'mcq', '2', '4', '8', '12', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2261, 'n', 'نام محفوظ کرنے کیلئے کونسی ڈیٹا ٹائپ بہتر ہے؟', 'mcq', 'سٹرنگ', 'انٹیجر', 'یک لفظی', 'دولفظی', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2262, 'n', 'سٹرنگ کونسٹنٹ کن علامات کے درمیان لکھا جاتا ہے؟', 'mcq', '<span dir=''rtl''>" "</span>', '<span dir=''rtl''>'' ''</span>', '<span dir=''rtl''>! !</span>', '<span dir=''rtl''># #</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2263, 'n', 'کونسی کمانڈ لائنوں کے نمبر خودبخود ظاہر کرتی ہے؟', 'mcq', '<span dir=''rtl''>AUTO</span>', '<span dir=''rtl''>CONT</span>', '<span dir=''rtl''>LOAD</span>', '<span dir=''rtl''>RUN</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2264, 'n', 'بیسک میں ڈسک پر محفوظ کی گئی فائل کو ختم کرنے والی کمانڈ ہے۔', 'mcq', '<span dir=''rtl''>KILL</span>', '<span dir=''rtl''>DELETE</span>', '<span dir=''rtl''>CLS</span>', '<span dir=''rtl''>END</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2265, 'n', 'ناقابل عمل ہدایت کو ظاہر کرتی ہے۔', 'mcq', '<span dir=''rtl''>REM</span>', '<span dir=''rtl''>NAME</span>', '<span dir=''rtl''>RENUM</span>', '<span dir=''rtl''>END</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2266, 'n', 'ایکسپریشن مشتمل ہوسکتا ہے۔', 'mcq', 'تمام', 'کانسٹنٹ', 'حسابی آپریٹر', 'متغیرات', '##', 'تمام', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2267, 'n', 'درج ذیل میں سے تمام درست ایکسپریشنز ہیں سوائے', 'mcq', '<span dir=''rtl''>mpg, gallons</span>', '<span dir=''rtl''>m/n</span>', '<span dir=''rtl''>Pi &times; radius</span>', '<span dir=''rtl''>sale - profit</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2268, 'n', 'اسائنمنٹ سٹیٹمنٹ کیا کرتی ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'حسابی عوامل سرانجام دیتی ہے', 'جواب کو محفوظ کرتی ہے', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2269, 'n', 'اسائنمنٹ سٹیٹمنٹ میں استعمال ہونیوالی ہدایت ہے۔', 'mcq', '<span dir=''rtl''>LET</span>', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>PRINT</span>', '<span dir=''rtl''>READ</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2270, 'n', 'بیسک میں آؤٹ پُٹ کیلئے استعمال ہونیوالی ہدایت ہے۔', 'mcq', '<span dir=''rtl''>PRINT</span>', '<span dir=''rtl''>INPUT</span>', '<span dir=''rtl''>WRITE</span>', '<span dir=''rtl''>OUTPUT</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2271, 'n', 'درج ذیل میں تمام حسابی آپریٹرز ہیں سوائے', 'mcq', '<span dir=''rtl''>></span>', '<span dir=''rtl''>MOD</span>', '<span dir=''rtl''>-</span>', '<span dir=''rtl''>+</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2272, 'n', 'ماڈولس آپریٹر کا دوسرا نام ہے۔', 'mcq', 'ریمینڈر آپریٹر', 'منطقی آپریٹر', 'کونیکٹیویٹی آپریٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2273, 'n', '<span dir=''rtl''>10 MOD 3 کا جواب ہے۔</span>', 'mcq', '1', '3', '8', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2274, 'n', '<span dir=''rtl''>3 MOD 5کا جواب ہے۔</span>', 'mcq', '3', '5', '0', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2275, 'n', '<span dir=''rtl''>0 MOD 4 کا جواب ہے۔</span>', 'mcq', '0', '4', 'دونوں', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2276, 'n', 'کسی متغیر میں کوئی قیمت محفوظ کرنے کیلئے کونسا آپریٹر استعمال ہوتا ہے؟', 'mcq', '<span dir=''rtl''>=</span>', '<span dir=''rtl''>+</span>', '<span dir=''rtl''>-</span>', '<span dir=''rtl''>&times;</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2277, 'n', 'ریلشنل آپریٹر کا جواب ہوتا ہے۔', 'mcq', '<span dir=''rtl''>0 یا 1</span>', '0', '1', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2278, 'n', 'جی ڈبلیو بیسک میں ریلشنل آپریٹرز کی تعداد ہے۔', 'mcq', '6', '2', '3', '4', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2279, 'n', 'درج ذیل میں تمام ریشنل آپریٹرز ہیں سوائے', 'mcq', '<span dir=''rtl''>ﮧ</span>', '<span dir=''rtl''><</span>', '<span dir=''rtl''>></span>', '<span dir=''rtl''><=</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2280, 'n', 'بیسک میں منطقی آپریٹرز کی تعداد ہے۔', 'mcq', '3', '2', '4', '6', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2281, 'n', 'اگر متغیر <span dir=''rtl''>A </span> کی قیمت 25 اور <span dir=''rtl''>B </span> کی قیمت 35 ہو تو کونسا جواب کی صورت میں ہوگا؟', 'mcq', '<span dir=''rtl''>A<>B</span>', '<span dir=''rtl''>A=B</span>', '<span dir=''rtl''>A>=B</span>', '<span dir=''rtl''>A>B</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2282, 'n', 'بیسک دو ریلیشنل ایکسپریشنز کو ملانے کیلئے استعمال ہوتے ہیں', 'mcq', 'منطقی آپریٹر', 'حسابی آپریٹر', 'ریلیشنل آپریٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2283, 'n', 'بیسک پروگرام پر مشتمل فائل کی ایکسٹینشن ہوتی ہے۔', 'mcq', '<span dir=''rtl''>bas</span>', '<span dir=''rtl''>bs</span>', '<span dir=''rtl''>txt</span>', '<span dir=''rtl''>doc</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2284, 'n', 'ماڈولس آپریٹر کا استعمال ہے', 'mcq', 'انٹیجر تقسیم کا باقی بچنے والا عدد', 'تقسیم', 'ضرب', 'قوت نما حاصل کرنا', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2285, 'n', 'جی ڈبلیو بیسک آپریٹ کر سکتی ہے۔', 'mcq', 'دو موڈز میں', 'ایک موڈ میں', 'تین مودز میں', 'کئی موڈز میں', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2286, 'n', 'جی ڈبلیو بیسک میں ایک ویری ایبل کی زیادہ سے زیادہ لمبائی ہے۔', 'mcq', '40', '31', '32', '45', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2287, 'n', 'اگر ایک قطار میں ایک سے زیادہ سٹیٹمنٹس لکھی جاتی ہیں تو ان کو علیحدہ کرنے کیلئے استعمال کرنا چاہیے۔', 'mcq', 'کولن', 'سیمی کولن', 'کوما', 'ہائفن', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2288, 'n', 'انٹیجر ویری ایبل کی ٹائپ کی نشاندہی کیلئے کونسا کریکٹر استعمال ہوتا ہے؟', 'mcq', '<span dir=''rtl''>%</span>', '<span dir=''rtl''>!</span>', '<span dir=''rtl''>#</span>', '<span dir=''rtl''>$</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2289, 'n', 'سب سے زیادہ ترجیحی قیمت رکھتا ہے۔', 'mcq', '<span dir=''rtl''>ﮧ</span>', '<span dir=''rtl''>=</span>', '<span dir=''rtl''>+</span>', '<span dir=''rtl''>&times;</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2290, 'n', 'ویری ایبل کا نام شروع ہونا چاہیے۔', 'mcq', 'الفا بیٹ سے', 'انڈر سکور سے', 'ڈیجٹ سے', 'ایفابیٹ یا انڈر سکور سے', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2291, 'n', 'جب ایک فلوٹنگ پوائنٹ ویلیو کو انٹیجر میں تبدیل کیا جاتا ہے تو کسری حصے کو', 'mcq', 'قریبی بڑے ہندسے میں تبدیل ہوتا ہے', 'ختم ہوجاتا ہے', 'تبدیل کرنا ممکن نہیں', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2292, 'n', 'درج ذیل میں سے کونسی سٹیٹمنٹ کسی پروگرام کی ایگزیکیوشن وقتی طور پر روک دیتی ہے؟', 'mcq', '<span dir=''rtl''>STOP</span>', '<span dir=''rtl''>PAUSE</span>', '<span dir=''rtl''>END</span>', '<span dir=''rtl''>BREAK</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2293, 'n', 'کونسی کمانڈ اُس پروگرام کو چلاتی ہے جسکی ایگزیکیوشن وقتی طور پر روک دی گئی تھی؟', 'mcq', '<span dir=''rtl''>CONT</span>', '<span dir=''rtl''>CONTINUE</span>', '<span dir=''rtl''>RESTART</span>', '<span dir=''rtl''>START</span>', '##', '##', NULL, 00086, 0);
INSERT INTO `questions` VALUES(2294, 'n', 'کونسی آپشن مسئلہ حل کرنے کا ایک عمل ہے؟', 'mcq', 'پروگرامنگ', 'پروسیجر', 'بگ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2295, 'n', 'پیچیدہ اور بڑے مسئلے کو چھوٹے چھوٹے حصوں میں تقسیم کرنے کی حکمتِ عملی کہلاتی ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'ٹاپ ڈاؤن ڈیزائن', 'تقسیم اور فتح کا عمل', 'الگورتھم بنانا', '<span dir=''rtl''>a اور b دونوں</span>', 'الگورتھم بنانا', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2296, 'n', 'کسی مسئلہ کو حل کرنے کیلئے محدود مراحل ما مجموعہ کہلاتا ہے۔', 'mcq', 'الگورتھم', 'حل', 'سنٹیکس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2297, 'n', 'کسی مسئلہ کو حل کرنے کیلئے کمپیوٹر کو دیا گیا ہدایات کا مجموعہ کہلاتا ہے۔', 'mcq', 'پروگرام', 'الگورتھم', 'ہارڈوئیر', 'فلوچارٹ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2298, 'n', 'الگورتھم کا مراحل کا تصویری اظہار کہلاتا ہے۔', 'mcq', 'فلوچارٹ', 'الگورتھم ڈائیگرام', 'ڈیٹا فلوڈائیگرام', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2299, 'n', 'الگورتھم کے کام کو احتیاط کے ساتھ جانچنے کو عمل کو کہتے ہیں', 'mcq', 'ڈیسک چیکنگ', 'کمپائلنگ', 'ڈی بگنگ', 'کوڈنگ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2300, 'n', 'کسی پروگرامنگ لینگویج میں پروگرام لکھنے کا عمل کہلاتا ہے۔', 'mcq', 'کوڈنگ', 'ڈیسک چیکنگ', 'فلو چارٹ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2301, 'n', 'کسی پروگرامنگ لینگویج میں پروگرام لکھنے کیلئے اصول و قواعد کا مجموعہ کہلاتا ہے۔', 'mcq', 'سنٹیکس', 'بگ', 'ڈی بگ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2302, 'n', 'پروگرام میں موجود غلطیوں کیلئے عام استعمال ہونیوالی اصطلاح ہے۔', 'mcq', 'بگ', 'ڈی بگ', 'کمپائلنگ', 'کوڈنگ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2303, 'n', 'پروگرام میں موجود غلطیوں کو تلاش کرنے اور ختم کرنے کا عمل کہلاتا ہے۔', 'mcq', 'ڈی بگنگ', 'کمپائلنگ', 'ایگزیکیوٹنگ', 'کوڈنگ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2304, 'n', 'درج ذیل میں سے کونسی آپشن پروگرام ایرر نہیں ہے؟', 'mcq', 'آپریٹر ایرر', 'لوجیکل ایرر', 'سنٹیکس ایرر', 'رن ٹائم ایرر', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2305, 'n', 'پروگرام میں سنٹیکس ایرر ڈھونڈتا ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'کمپائلر', 'انٹرپریٹر', 'ڈی بگر', '<span dir=''rtl''>a اور b دونوں</span>', 'ڈی بگر', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2306, 'n', 'کمپائلر درج ذیل میں سے کونسی غلطی نہیں ڈھونڈ سکتا؟', 'mcq', 'لوجیکل ایرر', 'سنٹیکس ایرر', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2307, 'n', 'بیسک لینگویج میں کسی کمانڈ کے سپیلنگ غلط لکھنا کس قسم کی غلطی ہے؟', 'mcq', 'سنٹیکس ایرر', 'رن ٹائم ایرر', 'لوجیکل ایرر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2308, 'n', 'اگر پروگرام ایسی آؤٹ پُٹ دے جو پروگرامر کے اندازے سے غلط ہو تو یہ غلطی کہلاتی ہے۔', 'mcq', 'لوجیکل ایرر', 'سنٹیکس ایرر', 'رن ٹائم ایرر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2309, 'n', 'درج ذیل میں سے تمام چیزیں ڈاکیومنٹیشن میں شامل ہوتی ہیں، سوائے', 'mcq', 'مشین لینگویج کوڈ', 'ٹیسٹ پروسیجر', 'پروگرام کا الگورتھم', 'یوزر مینوؤل', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2310, 'n', 'فلوچارٹ میں ڈائمنڈ کی علامت ظاہر کرتی ہے۔', 'mcq', 'فیصلہ سازی', 'پراسیس', 'ان پُٹ', 'آؤٹ پُٹ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2311, 'n', 'فلوچارٹ میں مستطیل کی علامت ظاہر کرتی ہے۔', 'mcq', 'پراسیس', 'شرط', 'ان پُٹ', 'آؤٹ پُٹ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2312, 'n', 'پروگرام میں کتنیقسم کے ایررز ہو سکتے ہیں؟', 'mcq', '3', '1', '2', '4', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2313, 'n', 'جب پروگرام کمپیوٹر کو غیر قانونی یا غیر تعریف شدہ کام کرنے کی ہدایت کرتا ہے تو کونسا ایرر واقع ہوتا ہے؟', 'mcq', 'رن ٹائم ایرر', 'سنٹیکس ایرر', 'لوجیکل ایرر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2314, 'n', 'فلوچارٹ میں اینوٹیشن کی علامت ظاہر کرتی ہے۔', 'mcq', 'ریمارکس', 'ان پُٹ', 'شرط', 'پراسیس', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2315, 'n', 'منطقی ایررز درست کرنے کیلئے کونسے امور سرانجام دیے جا سکتے ہیں؟', 'mcq', 'تمام', 'متغیرات کا جائزہ لینا', 'ہدایات کو ٹیسٹ کرنا', 'پروگرام کے منطقی بہاؤ کا جائزہ لینا', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2316, 'n', 'فلوچارت میں متوازی اضلاع کی علامت ظاہر کرتی ہے۔', 'mcq', 'دونوں', 'ان پُٹ', 'آؤٹ پُٹ', 'کوئی نہیں', 'دونوں', 'کوئی نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2317, 'n', 'مسئلہ کے حل میں سب سے مشکل مرحلہ ہے۔', 'mcq', 'الگورتھم ڈیزائن', 'پروگرام ٹیسٹ کرنا', 'ڈاکومنٹ کرنا', 'پروگرام چلانا', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2318, 'n', 'ایک مسئلہ کے کتنے حل ممکن ہیں؟', 'mcq', 'کئی', 'ایک', 'دو', 'تین', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2319, 'n', 'پروگرام کو بہتر بنانے سے مراد ہے؟', 'mcq', 'پروگرام کی بہتری', 'پروگرام کی شناخت', 'پروگرام بنانا', 'پروگرام کا اطلاق', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2320, 'n', 'زیادہ تر الگورتھمز درج ذیل میں کونسے کام سرانجام دیتے ہیں؟', 'mcq', 'ان پُٹ', 'آؤٹ پُٹ', 'پراسیسنگ', 'تمام', '##', 'تمام', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2321, 'n', 'بیسک میں ٹائپنگ کی ایررز کہلاتی ہین۔', 'mcq', 'سنٹیکس ایرر', 'لوجیکل ایرر', 'رن ٹائم ایرر', 'ایگزیکیوشن ایرر', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2322, 'n', 'ڈائمنڈ کی علامت ظاہر کرتی ہے۔', 'mcq', 'فیصلہ سازی', 'پراسیسنگ', 'ریمارکس', 'ان پُٹ، آؤٹ پُٹ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2323, 'n', 'صفر سے تقسیم ہے۔', 'mcq', 'رن ٹائم ایرر', 'سنٹیکس ایرر', 'لوجیکل ایرر', 'کوئی ایرر نہیں', '##', 'کوئی ایرر نہیں', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2324, 'n', 'ان میں سے کونسی دستاویزات سافٹ وئیر کی مختلف خصوصیات کو اور ان کے استعمال کو بیان کرتی ہے؟', 'mcq', 'یوزر مینؤل', 'الگورتھم', 'مسئلہ کا ذکر', 'سوفٹ وئیر کی ضرورت کا بیان', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2325, 'n', 'الگورتھم ہے ایک', 'mcq', 'ڈیزائن ڈاکیومنٹ', 'یوزر گائیڈ', 'ٹیسٹ ڈاکیومنٹ', 'ضرورت کے بارے میں ایک ڈاکیومنٹ', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2326, 'n', 'تقسیم کرو اور فتح کرو کی ٹکنیک استعمال کرتے ہیں، حل کرنے کیلئے', 'mcq', 'پیچیدہ اور بڑے مسائل', 'پیچیدہ مسائل', 'بڑے مسائل', 'سادہ مسائل', '##', '##', NULL, 00085, 0);
INSERT INTO `questions` VALUES(2327, 'n', 'پورٹیبل کمپیوٹر کیساتھ استعمال ہونیوالا مقبول پوائنٹنگ آلہ ہے۔', 'mcq', 'ٹریک بال', 'ماؤس', 'جوائے سٹک', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2328, 'n', 'گیمز کھیلنے کیلئے کونسا آلہ عام استعمال ہوتا ہے؟', 'mcq', 'جوائے سٹک', 'ٹریک بال', 'لائٹ پِن', 'سکینر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2329, 'n', 'پرنٹ کی گئی تصویر کو کمپیوٹر میں داخل کرنے کیلئے استعمال ہوتا ہے۔', 'mcq', 'سکینر', 'ماؤس', 'ٹریک بال', 'لائٹ پِن', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2330, 'n', 'کس قسم کا سافٹ وئیر سکین کیے گئے ٹیکسٹ کو ٹیکسٹ فائل میں تبدیل کرتا ہے؟', 'mcq', '<span dir=''rtl''>OCR</span>', '<span dir=''rtl''>CRT</span>', '<span dir=''rtl''>FDD</span>', '<span dir=''rtl''>HDD</span>', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2331, 'n', 'درج ذیل میں سے کونسی آپشن کسی شخص کی آواز کو ڈیجیٹل ڈیٹا میں تبدیل کرتی ہے؟', 'mcq', 'وائس ریکگنیشن', 'ساؤنڈ مشین کنورٹر', 'ساؤنڈ کنورشن کوڈ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2332, 'n', 'کونسا آلہ ڈیٹا کو ایسی شکل میں تبدیل کرتا ہے جسے ہم سمجھ سکیں؟', 'mcq', 'آؤٹ پُٹ', 'ان پُٹ', 'ذخیرہ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2333, 'n', 'کمپیوٹر سے ڈیٹا اور معلومات حاصل کرنے کیلئے استعمال ہونیوالا عام آلہ ہے۔', 'mcq', 'تمام', 'سپیکر', 'پرنٹر', 'مونیٹر', '##', 'تمام', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2334, 'n', 'سافٹ کاپی آؤٹ پُٹ حاصل کرنے کیلئے کونسا آلہ استعمال ہوتا ہے؟', 'mcq', 'مونیٹر', 'پرنٹر', 'پلاٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2335, 'n', 'ہارڈ کاپی آؤٹ پُٹ حاصل کرنے کیلئے کونسا آلہ استعمال ہوتا ہے؟', 'mcq', 'پرنٹر', 'سی ڈی رائٹر', 'مونیٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2336, 'n', 'ڈیجیٹل تصویر کو بنانے والا نقطہ کہلاتا ہے۔', 'mcq', 'پکسل', 'ڈاٹ میٹرکس', 'ریزولوشن پوائنٹ', 'ڈیجیٹل پوائنٹ', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2337, 'n', 'سکرین پر پکسل کی تعداد کہلاتی ہے۔', 'mcq', 'ریزولوشن', 'سافٹ کاپی', 'ہارڈ کاپی', 'پکچر کوالٹی', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2338, 'n', 'کم ریزولوشن کے مقابلے میں زیادہ ریزولوشن کا فائدہ یہ ہے کہ ', 'mcq', 'بہتر معیار کی حامل ہوتی ہے', 'پیسہ کی بچت ہوتی ہے', 'ژخیرہ کی ضرورت کم ہوتی ہے', 'پراسیسنگ کی رفتار تیز ہوتی ہے', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2339, 'n', 'پکسل مخفف ہے', 'mcq', 'پکچر ایلیمنٹ', 'پکچر اینٹر', 'پلیس ایڈٹ', 'پیج ایڈٹ', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2340, 'n', 'لیپ ٹاپ کمپیوٹر استعمال کرتے ہیں۔', 'mcq', 'ایل سی ڈی ڈسپلے', 'سی آرٹی ڈسپلے', '<span dir=''rtl''> a اور b دونوں</span>', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2341, 'n', 'The force in a medium of relative permittivity &epsilon;<sub>r</sub> is given by', 'mcq', 'F<sup>&acute;</sup> = F / &epsilon;<sub>r</sub>', 'F<sup>&acute;</sup> = &epsilon;<sub>r</sub> / F', 'F<sup>&acute;</sup> = &epsilon;<sub>r</sub> F', 'F<sup>&acute;</sup> = F / &epsilon;<sub>0</sub>&epsilon;<sub>r</sub>', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2342, 'n', 'Electric charge of 100&micro;C is 13cm apart from another charge 16.9&micro;C. The force between them is  ', 'mcq', '900N', '9&times;10<sup>7</sup>', '90', '9&times;10<sup>5</sup>', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2343, 'n', 'The value of &epsilon;<sub>r</sub> for various dielectrics is', 'mcq', 'larger than unity', 'less than unity', 'equal to unity', 'slightly less than unity', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2344, 'n', 'The force between two point charges in air or vacuum is F. If air or vacuum is replaced by an insulator of relative permittivity &epsilon;<sub>r</sub>, the force between the charges ', 'mcq', 'decreases', 'increases', 'slightly increases', 'remains constant', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2345, 'n', 'Value of dielectric constant for air or vacuum is', 'mcq', 'one\r\n', 'greater than one', 'less than one', 'slightly less than one', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2346, 'n', 'When current of one ampere is flowing through any cross-section of wire in one second, then the quantity of charge is said to be', 'mcq', 'one coulomb', 'one micro coulomb', 'two coulomb', 'two micro coulomb', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2347, 'n', 'Two charges are placed at a certain distance. If the magnitude of each charge is doubled, the force will become', 'mcq', '4 times its original', '1/4th time of its original', '1/8th time of its original', '16 times of its original', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2348, 'n', 'The electric force of repulsion between two electrons at a distance of one meter is', 'mcq', '2.30 &times; 10<sup>-28</sup>N', '2.30 &times; 10<sup>-27</sup>N', '1.5 &times; 10<sup>-9</sup>N', '1.8N', '##', '##', NULL, 00055, 0);
INSERT INTO `questions` VALUES(2349, 'n', 'The current through a metallic conductor is due to the motion of', 'mcq', 'free electrons', 'electrons', 'protons', 'neutrons', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(2350, 'n', 'In liquids and gases, the current is due to the motion of ', 'mcq', 'both negative and positive ions', 'negative charges', 'positive charges', 'neutral particles', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(2351, 'n', 'Free electrons are', 'mcq', 'loosly bound', 'tightly bound', 'fixed', 'tightly fixed', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(2352, 'n', 'The direction of conventional current flowing in a circuit is', 'mcq', 'from negative to positive in the external circuit and from positive to negative terminal within the source of P.D', 'from positive to negative in the external circuit and from negative to positive terminal within the source of P.D', 'from positive to negative throught the circuit', 'from negative to positive throught the circuit', '##', '##', NULL, 00056, 0);
INSERT INTO `questions` VALUES(2353, 'n', 'The force that appears as a result of the interaction between two moving charges is known as', 'mcq', 'magnetic force', 'induced force', 'electrostatic force', 'gravitational force', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2354, 'n', 'The force of repulsion between two like magnetic poles depends upon', 'mcq', 'all of the above', 'distance between poles', 'strength of the poles', 'nature of the separating medium', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2355, 'n', 'The around a moving charge is called', 'mcq', 'magnetic field', 'electric field', 'conservative field', 'gravitational field', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2356, 'n', 'The magnetic effect near the current carrying conductor  was discovered by', 'mcq', 'Hans Oersted', 'Coulomb', 'Bohr', 'Faraday', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2357, 'n', 'Which one of the following metals is non magnetic substance  ', 'mcq', 'brass', 'cobalt', 'nickle', 'iron', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2358, 'n', 'The most suitable material for making a permanent magnet is', 'mcq', 'steel', 'soft iron', 'aluminum', 'cobalt', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2359, 'n', 'A current carrying conductor is surrounded by', 'mcq', 'magnetic field', 'electric field', 'gravitational field', 'conservative field', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2360, 'n', 'The magnetic field at a point due to current carrying conductor is directly proportional to', 'mcq', 'current passing through the conductor', 'thickness of conductor', 'resistance of conductor', 'distance from the conductor', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2361, 'n', 'A straight wire is held perpendicular to the plane of a paper. If current flows through the wire  directed out the paper, the magnetic field around the wire is represented by', 'mcq', 'anti clockwise circular lines in the plane of paper', 'clockwise circular lines in the plane of paper', 'lines parallel to the paper', 'lines directed to the paper', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2362, 'n', 'A straight wire is held perpendicular to the plane of a paper. If current flows through the wire  directed into the paper, the magnetic field around the wire is represented by', 'mcq', 'clockwise circular lines in the plane of paper', 'anti clockwise circular lines in the plane of paper', 'lines parallel to the paper', 'lines directed to the paper', '##', '##', NULL, 00057, 0);
INSERT INTO `questions` VALUES(2363, 'n', 'The current which keeps on reversing its direction (or polarity) with time is called', 'mcq', 'alternating current', 'direct current', 'induced current', 'electronic current', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2364, 'n', 'The worldwide use of A.C. is that it can be transmitted to', 'mcq', 'long distances easily', 'short distances', 'intermediate distances', 'all of the above', '##', 'all of the above', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2365, 'n', 'The main use of A.C is', 'mcq', 'all of these', 'minimum line loss', 'stepping up to required voltage', 'stepping down to required voltage', '##', 'all of these', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2366, 'n', 'The time interval during which the voltage source changes its polarity once is called', 'mcq', 'period of alternating current', 'period of resonance', 'critical time', 'frequency of A.C', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2367, 'n', 'The frequency of alternating current is', 'mcq', 'f = 1/T', 'f = T', 'f = <span style="white-space: nowrap; font-size:larger"> &radic;<span style="text-decoration:overline;">&nbsp;1/T&nbsp;</span> </span>', 'f = 1/<span style="white-space: nowrap; font-size:larger"> &radic;<span style="text-decoration:overline;">&nbsp;T&nbsp;</span> </span>', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2368, 'n', 'The most common source of an A.C voltage is ', 'mcq', 'A.C. generator', 'A.C. transformer', 'motor', 'battery', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2369, 'n', 'The graph between voltage and time is called', 'mcq', 'sine curve', 'cosine curve', 'tangent curve', 'varying curve', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2370, 'n', 'Current in a battery or cell indicates an example of', 'mcq', 'direct current', 'alternating current', 'ionic current', 'electronic current', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2371, 'n', 'If ''f'' be the frequency of rotation in time ''t'' then the angle ''&theta;'' through which the coil is rotated is given by', 'mcq', '&theta; = 2&pi;ft', '&theta; = 2&pi;f/t', '&theta; = t/2&pi;f', '&theta; = 1/2&pi;ft', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2372, 'n', 'The current which does not change its direction through the circuit for a complete cycle is called', 'mcq', 'diurect current', 'alternating current', 'electronic current', 'ionic current', '##', '##', NULL, 00059, 0);
INSERT INTO `questions` VALUES(2373, 'n', 'The branch of physics which deals with  the emission, behavior, and effects of electrons in a device is called', 'mcq', 'electronics', 'electrostatics', 'electricity', 'electrodynamics', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2374, 'n', 'The number of valence electrons in Ge and Si atoms atoms are', 'mcq', '4', '2', '3', '5', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2375, 'n', 'Holes can exist in', 'mcq', 'semiconductors', 'conductors', 'insulators', 'all of the above', '##', 'all of the above', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2376, 'n', 'In p-type substances charge carriers are', 'mcq', 'holes', 'protons', 'electrons', 'negative ions', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2377, 'n', 'Which of the following are charge carriers inside an n-type crystal?', 'mcq', 'electrons', 'holes', 'protons', 'positrons', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2378, 'n', 'Tick the correct statement', 'mcq', 'all of above', 'the electrons are majority carriers and holes are minority carriers in n-type material', 'the electrons are minority carriers and holes are majority carriers in p-type material', 'the n-type and p-type materials remain electrically neutral as a whole', '##', 'all of above', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2379, 'n', 'Hole is equivalent to', 'mcq', 'a positive charge', 'a negative charge', 'a neutral particle', 'an electron', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2380, 'n', 'What type of material is formed when a pentavalent material is added to pure germanium?', 'mcq', 'n-type', 'p-type', 'both n-type and p-type', 'none of the above', 'both n-type and p-type', 'none of the above', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2381, 'n', 'Donor impurities are', 'mcq', 'antimony, arsenic', 'germinium, silicon', 'indium, gallium', 'diamond, carbon', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2382, 'n', 'Acceptor impurities are', 'mcq', 'indium, gallium', 'germinium, silicon', 'antimony, arsenic', 'sodium, zinc', '##', '##', NULL, 00061, 0);
INSERT INTO `questions` VALUES(2383, 'n', 'درج ذیل میں سے امپیکٹ پرنٹر نہیں ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'لیزر پرنٹر', 'انک جیٹ پرنٹر', 'ڈاٹ میٹرکس پرنٹر', '<span dir=''rtl''>a اور b دونوں</span>', 'ڈاٹ میٹرکس پرنٹر', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2384, 'n', 'درج ذیل میں سے نان امپیکٹ پرنٹر نہیں ہے۔', 'mcq', 'ڈاٹ میٹرکس پرنٹر', 'تھرمل پرنٹر', 'انک جیٹ پرنٹر', 'لیزر پرنٹر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2385, 'n', 'کونسا پرنٹر ذیادہ تیز رفتار ہے؟', 'mcq', 'لیزر', 'انک جیٹ', 'ڈاٹ میٹرکس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2386, 'n', 'کونسا پرنٹر فوٹو کاپی مشین جیسا ہے؟', 'mcq', 'لیزر پرنٹر', 'ڈاٹ میٹرکس پرنٹر', 'انک جیٹ پرنٹر', 'لائن پرنٹر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2387, 'n', 'کونسا پرنٹر پرنٹ ہیڈ کو کاغز پر حرکت دیکر ایک وقت میں ایک حرف بناتا ہے؟', 'mcq', 'ڈاٹ میٹرکس پرنٹر', 'لیزر پرنٹر', 'انک جیٹ پرنٹر', 'پلاٹر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2388, 'n', 'کونسا پرنٹر گرم پنوں کے ذریعے حساس کاغذ پر آؤٹ پُٹ بناتا ہے؟', 'mcq', 'الیکٹروتھرمل پرنٹر', 'ڈاٹ میٹرکس پرنٹر', 'انک جیٹ پرنٹر', 'لائن پرنٹر', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2389, 'n', 'لیزر پرنٹر کی افتار ناپی جاتی ہے۔', 'mcq', 'صفحات فی منٹ', 'لائنیں فی منٹ', 'الفاظ فی منٹ', 'حروف فی منٹ', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2390, 'n', '<span dir=''rtl''>CRT</span> مخفف ہے۔', 'mcq', '<span dir=''rtl''>Cathode Ray Tube</span>', '<span dir=''rtl''>Coated Rays Tube</span>', '<span dir=''rtl''>Chemical Rays Tube</span>', '<span dir=''rtl''>Color Rays Tube</span>', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2391, 'n', 'کونسی ڈرائیو کے ذریعے آپٹیکل سٹوریج میڈیا پر کئی بار پڑھنے اور لکھنے کا عمل سر انجام دیا جا سکتا ہے؟', 'mcq', '<span dir=''rtl''>CD-RW</span>', '<span dir=''rtl''>DVD-ROM</span>', '<span dir=''rtl''>CD-ROM</span>', '<span dir=''rtl''>CD-R</span>', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2392, 'n', '<span dir=''rtl''>CD-ROM</span> مخفف ہے۔', 'mcq', '<span dir=''rtl''>Compact disk - read only memory</span>', '<span dir=''rtl''>Computer disk - read only memory</span>', '<span dir=''rtl''>Compact disk - read only music</span>', '<span dir=''rtl''>Compact disk - replay only music</span>', '##', '##', NULL, 00049, 0);
INSERT INTO `questions` VALUES(2393, 'n', 'مین میموعی کو کہا جاتا ہے۔', 'mcq', 'تمام', 'اندرونی میموری', 'پرائمری سٹوریج', 'پرائمری میموری', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2394, 'n', 'میموری میں قابل شناخت جگہ جہاں ڈیٹا محفوظ کیا جا سکے، کہلاتا ہے۔', 'mcq', 'ایڈریس', 'سپیس', 'لوکیشن', 'سیل', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2395, 'n', 'میموری سیلز کے گروپ منطقی طور پر کس میں بنائے جاتے ہیں؟', 'mcq', '8 بِٹس', '5 بِٹس', '12 بِٹس', '24 بِٹس', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2396, 'n', 'ریم مخفف ہے۔', 'mcq', 'رینڈم ایکسیس میموری', 'ریڈ اینڈ مور میموری', 'ریڈیلی اویل ایبل میموری', 'ریممبر آل میموری', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2397, 'n', 'ریم کی ایک خصوصیت ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>ریڈ / رائٹ</span>', 'وولاٹائل', 'نان وولاٹائل', '<span dir=''rtl''>a اور b دونوں</span>', 'نان وولاٹائل', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2398, 'n', 'روم مخفف ہے۔', 'mcq', 'ریڈ اونلی میموری', 'ریپڈ آن لائن میموری', 'ریکرسیو آن لائن میموری', 'تمام', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2399, 'n', 'روم کی خصوصیت ہے۔', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'ریڈ اونلی', 'نان وولاٹائل', 'وولاٹائل', 'وولاٹائل', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2400, 'n', 'روم اور ریم میں فرق یہ ہے کہ', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'روم بڑی ہے۔', 'روم نان وولاٹائل ہے۔', 'روم ریڈ اونلی ہے۔', '<span dir=''rtl''>a اور b دونوں</span>', 'روم ریڈ اونلی ہے۔', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2401, 'n', 'کونسی ذیادہ تیز ہے؟', 'mcq', 'رجسٹر', 'ریم', 'کیش', 'ہارڈڈسک', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2402, 'n', 'درج ذیل میں کونسی ریم کی قسم نہیں ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئیک ریم', 'سٹیبل ریم', 'ڈائنامک ریم', 'ڈائنامک ریم', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2403, 'n', 'کونسی چِپ برقی چارج کو ریفریش کئے بغیر ڈیٹا کو محفوظ رکھ سکتی ہے؟', 'mcq', 'سٹیٹک بار', 'ڈائنامک ریم', 'ڈائنامک روم', 'سٹیٹک روم', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2404, 'n', 'سٹیٹک ریم ٹیکنالوجی کیلئے استعمال ہوتی ہے۔', 'mcq', 'کیش میموری', 'پرائمری میموری', 'سیکنڈری میموری', 'سی پی یو رجسٹرز', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2405, 'n', 'ڈی ریم<span dir=''rtl''>:</span>', 'mcq', 'ایس ریم سے سستی ہے', 'کیش میموری میں استعمال ہوتی ہے', 'ایس ریم سے ذیادہ مہنگی ہے', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2406, 'n', 'ڈیٹا سٹوریج کو ناپنے کیلئے استعمال ہوتا ہے۔', 'mcq', 'بائٹ', '<span dir=''rtl''>kbps</span>', '<span dir=''rtl''>MHz</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2407, 'n', 'بِٹ مخفف ہے۔', 'mcq', 'بائنری ڈیجٹ', 'بائٹ ڈیجٹ', 'بیس ڈیجٹ', 'بیسک ڈیجٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2408, 'n', 'کمپیوٹر میں ڈیٹا کا سب سے چھوٹا یونٹ ہے۔', 'mcq', 'بِٹ', 'لفظ', 'حرف', 'بائٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2409, 'n', 'بِٹ کتنی مقداریں ظاہر کرسکتی ہے؟', 'mcq', '2', '0', '3', '1', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2410, 'n', 'درج ذیل میں سب سے بڑا کونسا ہے؟', 'mcq', 'ٹیرابائٹ', 'میگابائٹ', 'گیگابائٹ', 'کلوبائٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2411, 'n', 'ایک بائٹ میں کتنی بِٹس ہوتی ہیں؟', 'mcq', '8', '1', '2', '4', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2412, 'n', 'ایک نیل میں کتنی بِٹس ہوتی ہیں؟', 'mcq', '4', '1', '2', '8', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2413, 'n', 'ایک کلوبائٹ برابر ہے۔', 'mcq', '1024 بائٹس', '256 بائٹس', '100 بائٹس', '512 بائٹس', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2414, 'n', 'ایک میگابائٹ برابر ہے', 'mcq', '1024 کلوبائٹ', '1024 بائٹس', '100 کلوبائٹ', '1 کلوبائٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2415, 'n', 'ایک ٹیرابائٹ برابر ہے۔', 'mcq', '1024 گیگا بائٹ', '1024 کلو بائٹس', '1000 کلوبائٹ', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2416, 'n', 'ایک گیگا بائٹ برابر ہے۔', 'mcq', '1024 میگابائٹ', '1000 کلوبائٹ', '100 ٹیرابائٹ', '<span dir=''rtl''>a اور b دونوں</span>', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2417, 'n', 'کونسی آپشن چھوٹے سے بڑے یونٹ کی طرف ہے؟', 'mcq', '<span dir=''rtl''>KB, MB, GB, TB</span>', '<span dir=''rtl''>MB, TB, GB, KB</span>', '<span dir=''rtl''>KB, MB, TB, GB</span>', '<span dir=''rtl''>GB, KB, MB, TB</span>', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2418, 'n', '<span dir=''rtl''>TB</span> مخفف ہے۔', 'mcq', 'ٹیرابائٹ', 'ٹیرا بِٹ', 'ٹیرابیس', 'ٹیسٹ بائٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2419, 'n', '<span dir=''rtl''>MB</span> مخفف ہے۔', 'mcq', 'میگابائٹ', 'مکینیکل بیس', 'میگابِٹ', 'میگنیٹک بیس', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2420, 'n', 'ایسا ہارڈوئیر آلہ جو ڈیٹا اور پروگرام کو مستقل طور پر محفوظ کرتا ہے۔', 'mcq', 'سیکنڈری سٹوریج', 'پرائمری سٹوریج', 'سی پی یو', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2421, 'n', 'ڈیٹا محفوظ کرنے اور ڈیٹا تک رسائی کے دو طریقے ہیں۔', 'mcq', 'سیکوئنشل ار ڈائریکٹ', 'متوازی اور سیریل', 'زِپ اور کمپریسڈ', 'سیکشن اور گروپ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2422, 'n', 'ڈیٹا اور معلومات مختلف ذخیرہ کے زرائع پر محفوظ کیے جاتے ہیں، مثلًا', 'mcq', 'تمام', 'کمپیکٹ ڈسک', 'مقناطیسی ٹیپ', 'مقناطیسی ڈسک', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2423, 'n', 'میموری کے مقابلے میں سٹوریج ہے', 'mcq', 'تمام', 'سُست رسائی والی', 'زیادہ گنجائش والی', 'زیادہ سستی', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2424, 'n', 'درج ذیل میں سے کونسی سٹوریج رِیڈ اونلی ہے؟', 'mcq', 'سی ڈی روم', 'مقناطیسی ٹیپ', 'رینڈم ایکسیس میموری', 'ہارڈ ڈسک', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2425, 'n', 'مقناطیسی ٹیپ ہے۔', 'mcq', 'تمام', 'سیکوئنشل سٹوریج آلہ', 'سُست رفتار', 'رِیڈ/رائٹ آلہ ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2426, 'n', 'ڈسک کو رکھنے والا آلہ کہلاتا ہے۔', 'mcq', 'ڈسک ڈرائیو', 'ڈسک ہولڈر', 'ڈسک کیشے', 'ڈسکیٹ', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2427, 'n', 'سٹیندرڈ فلاپی ڈسک کا سائز ہے', 'mcq', '3.5ً', '2.5ً', '4.5ً', '5.25ً', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2428, 'n', 'ڈسک کی سطح پر موجود ہم مرکز دائرے کہلاتے ہیں۔', 'mcq', 'ٹریک', 'سلنڈر', 'سیکٹر', 'سائیکل', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2429, 'n', 'ڈسک کے مختلف پلیٹرز پر یکساں جگہ پر موجود ٹریکس کا مجموعہ کہلاتا ہے۔', 'mcq', 'ٹریک', 'سلنڈر', 'سیکٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2430, 'n', 'مطلوبہ سیکٹر کو ریڈ / رائٹ ہیڈ کے نیچے آنے تک انتظار کا وقفہ کہلاتا ہے', 'mcq', 'روٹیشنل وقفہ', 'سیک', 'ڈیٹا ترانسفر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2431, 'n', 'ریڈ / رائٹ ہیڈ کو کسی ٹریک پر لانے کا عمل کہلاتا ہے۔', 'mcq', 'سیک', 'روٹیشنل وقفہ', 'ڈیٹا ٹرانسفر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2432, 'n', 'مقناطیسی ڈسک پر ٹریک کے مختلف حصے کہلاتے ہیں', 'mcq', 'سیکٹر', 'فیلڈ', 'سب ڈویژن', 'سلنڈر', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2433, 'n', 'ایک سیکٹر میں کتنی بائٹس محفوظ کی جاسکتی ہیں؟', 'mcq', '512', '1024', '215', '16', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2434, 'n', 'سی ڈی روم کی گنجائش تقریبًاہے', 'mcq', '700 میگابائٹس', '1 گیگا بائٹس', '4 گیگابائٹس', '100 میگابائٹس', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2435, 'n', 'ٹیپ سٹوریج ہوتی ہے', 'mcq', 'ہارڈ ڈسک سے کم رفتار', 'ہارڈ ڈسک سے زیادہ رفتار', 'براہِ راست ایکسیس آلہ', 'تمام', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2436, 'n', 'ایک کلو بائٹ برابر ہے', 'mcq', '2<sup>10</sup> بائٹس', '2<sup>30</sup> بائٹس', '2<sup>20</sup> بائٹس', '1000 بائٹس', '##', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2437, 'n', 'کیش میموری مین میموری سے', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'تیز رفتار ہے', 'چھوٹی ہے', 'کم رفتار ہے', '<span dir=''rtl''>a اور b دونوں</span>', 'کم رفتار ہے', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2438, 'n', 'امپیکٹ پرنٹر', 'mcq', 'طباعت کے دوران کاغذ کی سطح کو ٹچ کرتے ہیں', 'طباعت کے دوران کاغذ کی سطح کو ٹچ نہیں کرتے ', 'نان امپیکٹ پرنٹرز سے تیز ہوتے ہیں', 'تمام', '##', 'تمام', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2439, 'n', 'سٹیٹک ریم', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'ڈی ریم سے تیز ہوتی ہے', 'فہرست کا وقفہ وقفہ سے ریفریش ہونا درکار نہیں ہوتا', 'فہرست کا وقفہ وقفہ سے ریفریش ہونا درکار ہوتا ہے', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00050, 0);
INSERT INTO `questions` VALUES(2440, 'n', 'خام حقائق اور اعدادوشمار کا مجموعہ کہلاتا ہے۔', 'mcq', 'ڈیٹا', 'انفارمیشن', 'پراسیسنگ', 'آؤٹ پُٹ', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2441, 'n', 'پراسیسنگ کے بعد ڈیٹا کہلاتا ہے۔', 'mcq', 'انفارمیشن', 'نمونہ ڈیٹا', 'آؤٹ پُٹ ڈیٹا', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2442, 'n', 'درج ذیل میں سے ڈیٹا کی قسم ہے', 'mcq', 'تمام', 'الفانومیرک', 'الفابیٹک', 'نومیرک', '##', 'تمام', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2443, 'n', 'طلباء کے نام ظاہر کرنے کیلئے ڈیٹا کی کونسی قسم استعمال ہوتی ہے؟', 'mcq', 'الفابیٹک ڈیٹا', 'نومیرک ڈیٹا', 'الفانومیرک ڈیٹا', '<span dir=''rtl''>a اور b دونوں</span>', '##', '<span dir=''rtl''>a اور b دونوں</span>', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2444, 'n', 'کمپیوٹر کے اندر اعداد محفوظ اور منتقل کئے جاتے ہیں', 'mcq', 'ثنائی شکل میں', 'اعشاری شکل میں', 'الفانومیرک شکل میں', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2445, 'n', 'دو ثنائی ہندسے کہلاتے ہیں', 'mcq', 'بِٹ', 'بائٹ', 'ٹرانزسٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2446, 'n', 'اعشاری عددی نظام کی بیس ہے', 'mcq', '10', '2', '8', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2447, 'n', 'ثنائی عددی نظام کی بیس ہے', 'mcq', '2', '8', '10', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2448, 'n', 'آکٹل عددی نظام کی بیس ہے', 'mcq', '8', '2', '10', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2449, 'n', 'ہیکساڈیسیمل عددی نظام کی بیس ہے', 'mcq', '16', '2', '8', '10', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2450, 'n', 'آکٹل عددی نظام میں ہندسوں کی تعداد ہے', 'mcq', '8', '7', '10', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2451, 'n', 'اعشاری عددی نظام میں ہندسوں کی تعداد ہے', 'mcq', '10', '8', '7', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2452, 'n', 'ہیکسا ڈیسیمل عددی نظام میں ہندسوں کی تعداد ہے', 'mcq', '16', '17', '15', '8', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2453, 'n', 'ایک نیبل میں بِٹس کی تعداد ہے', 'mcq', '4', '8', '5', '16', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2454, 'n', 'ہیکساڈیسیمل عددی نظام میں <span dir=''rtl''> F </span> کا حرف اعشاری نطام کے ۔۔۔۔۔ کو ظاہر کرتا ہے۔', 'mcq', '15', '16', '17', '8', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2455, 'n', 'ہیکساڈیسیمل عددی نظام میں <span dir=''rtl''> B </span> اعشاری عدد کے برابر ہے', 'mcq', '11', '10', '17', '18', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2456, 'n', 'ہیکساڈیسیمل عددی نظام میں <span dir=''rtl''> C </span> اعشاری عدد کے برابر ہے', 'mcq', '12', '10', '11', '18', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2457, 'n', '2<sup>3</sup> کی اعشاری مقدار ہے۔', 'mcq', '8', '6', '4', '2', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2458, 'n', '2<sup>-1</sup> کی اعشاری مقدار ہے۔', 'mcq', '0.5', '0.25', '0.05', '0.1', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2459, 'n', 'ہیکساڈیسیمل نظام میں <span dir=''rtl''> E </span> ثنائی عدد کے برابر ہے۔', 'mcq', '1110', '1101', '1001', '1111', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2460, 'n', 'ہیکساڈیسیمل نظام میں <span dir=''rtl''> D </span> ثنائی عدد کے برابر ہے۔', 'mcq', '1101', '1110', '1001', '1111', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2461, 'n', 'کونسا ثنائی عدد اعشاری عدد 10 کے برابر ہے؟', 'mcq', '1010', '1100', '1000', '1001', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2462, 'n', 'ہیکساڈیسیمل نظام میں <span dir=''rtl''> FF </span> اعشاری عدد کے برابر ہے۔', 'mcq', '255', '256', '240', '239', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2463, 'n', 'ثنائی عدد 1101 آکٹل عدد ۔۔۔ کے برابر ہے', 'mcq', '15', '16', '17', '14', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2464, 'n', '<span dir=''rtl''>3 &times; 10 <sup>1</sup> + 7 &times; 10 <sup>0</sup></span>', 'mcq', '1111', '1001', '10', '3.6', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2465, 'n', '2<sup>0</sup> برابر ہے', 'mcq', '1', '0', '2', '20', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2466, 'n', 'اعشاری عدد 18 ثنائی عدد کے برابر ہے۔', 'mcq', '10010', '10001', '1110', '1111000', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2467, 'n', '111 - 001 برابر ہے۔', 'mcq', '110', '001', '111', '100', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2468, 'n', 'ثنائی ضرب <span dir=''rtl''> 1 &times 0 </span> برابر ہے۔', 'mcq', '0', '1', '10', '11', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2469, 'n', '10011101 کیلئے ا کا کمپلیمنٹ ہے۔', 'mcq', '01100010', '1001110', '01100001', '01100011', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2470, 'n', '<span dir=''rtl''>MSB </span> مخفف ہے۔', 'mcq', '<span dir=''rtl''>Most Significant Bit</span>', '<span dir=''rtl''>Middle Sum Byte</span>', '<span dir=''rtl''>Maximum Single Bit</span>', '<span dir=''rtl''>Minimum Single Bit</span>', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2471, 'n', 'علامتی بِٹ کی تعریف ہے۔', 'mcq', 'تمام', 'منفی کیلئے 1', 'مثبت کیلئے 0', '<span dir=''rtl''>MSB</span>', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2472, 'n', 'اگر علامتی بِٹ 1 ہو تو عدد ہوتا ہے', 'mcq', 'منفی', 'مثبت', 'غلط', 'آکٹل مقدار', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2473, 'n', '7 بِٹس کا <span dir=''rtl''> ASCII </span> کوڈ کتنے حروف ظاہر کرسکتا ہے؟', 'mcq', '128', '256', '500', '364', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2474, 'n', '8 بِٹس کا <span dir=''rtl''> ASCII </span> کوڈ کتنے حروف ظاہر کرسکتا ہے؟', 'mcq', '256', '128', '500', '364', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2475, 'n', 'کمپیوٹر میں حروف ظاہر کرنے کیلئے سب سے ذیادہ استعمال ہونے والی کوڈنگ سکیم ہے۔', 'mcq', '<span dir=''rtl''>ASCII</span>', '<span dir=''rtl''>EBCDIC</span>', 'یونی کوڈ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2476, 'n', '<span dir=''rtl''>BCD</span> مخفف ہے۔', 'mcq', '<span dir=''rtl''>Binary coded decimal</span>', '<span dir=''rtl''>Base coded decimal</span>', '<span dir=''rtl''>Byte coded decimal</span>', '<span dir=''rtl''>Bidirectional coded decimal</span>', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2477, 'n', 'اعشاری عدد 16 کیلئے <span dir=''rtl''> BCD </span> کوڈ ہے۔', 'mcq', '00010110', '00010010', '00010011', '11100000', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2478, 'n', 'یونی کوڈ ہے۔', 'mcq', '16 بِٹس کوڈ', '32 بِٹس کوڈ', '64 بِٹس کوڈ', '10 بِٹس کوڈ', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2479, 'n', 'یونی کوڈ کتنے حروف ظاہر کرسکتا ہے؟', 'mcq', '65636', '10000', '15000', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2480, 'n', 'ہیکساڈیسیمل عددی نظام میں <span dir=''rtl''> A </span> اعشاری عدد کے برابر ہے', 'mcq', '10', '11', '17', '18', '##', '##', NULL, 00051, 0);
INSERT INTO `questions` VALUES(2481, 'n', 'بولین الجبرا کے بنائے جانے کا سال ہے۔', 'mcq', '1847', '1947', '1915', '1940', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2482, 'n', 'بولین الجبرا کس نے بنایا؟', 'mcq', 'جارج بُول', 'وان نیومن', 'چارلس بابیج', 'ڈینس رِچی', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2483, 'n', 'بولین الجبرا کی بناوٹ ملتی جلتی ہے', 'mcq', 'پراپوزیشنل کیلکولس', 'حسابی کیلکولس', 'ریلیشنل کیلکولس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2484, 'n', 'بولین الجبرا کا دوسرا نام ہے۔', 'mcq', 'سوئچنگ الجبرا', 'منطقی الجبرا', 'کوڈ الجبرا', 'ڈیجیٹل الجبرا', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2485, 'n', 'منطقی حالت صرف ہوسکتی ہے ۔۔۔ یا 0', 'mcq', '1', '0', '2', '3', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2486, 'n', 'بولین الجبرا میں متغیرات کی ممکنہ قیمتیں ۔۔۔ ہیں', 'mcq', '2', '1', '4', '8', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2487, 'n', 'بولین الجبرا میں <span dir=''rtl''>AND </span> آپریٹر کو ظاہر کیا جاتا ہے۔', 'mcq', '<span dir=''rtl''>&times;</span>', '+', '-', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2488, 'n', 'بولین الجبرا میں <span dir=''rtl''> OR </span> آپریٹر کو ظاہر کیا جاتا ہے۔', 'mcq', '+', '-', '<span dir=''rtl''>&times;</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2489, 'n', 'بولین مساوات <span dir=''rtl''>X = A+B </span> میں <span dir=''rtl''> A+B </span> پڑھی جاتی ہے', 'mcq', '<span dir=''rtl''> A یا B </span>', '<span dir=''rtl''> A اور B </span>', '<span dir=''rtl''> A جمع B </span>', '<span dir=''rtl''> A جمع کیا گیا  B میں </span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2490, 'n', 'بولین مساوات <span dir=''rtl''>X = AB </span> میں <span dir=''rtl''> AB </span> پڑھی جاتی ہے', 'mcq', '<span dir=''rtl''> A اور B </span>', '<span dir=''rtl''> A یا B </span>', '<span dir=''rtl''> A اور B کی ضرب</span>', '<span dir=''rtl''> منطق 0 یا 1 </span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2491, 'n', 'کسی چیز کا 0 کیساتھ  <span dir=''rtl''>AND</span> عمل برابر ہے', 'mcq', '0', '1', 'کمپلیمنٹ', 'اپنے آپ کے', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2492, 'n', 'کسی چیز کا 1 کیساتھ<span dir=''rtl''>OR</span>  عمل برابر ہے۔', 'mcq', '1', '0', 'کمپلیمنٹ', 'اپنے آپ کے', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2493, 'n', '<span dir=''rtl''>x+y=y+x</span> کس کا اظہار ہے۔', 'mcq', 'قانونِ مبادلہ', 'قانونِ لاگو', 'قانونِ تلازمہ', 'قانونِ تقسیمی', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2494, 'n', '<span dir=''rtl''>x(yz) = (xy)z</span> کس کا اظہار ہے؟', 'mcq', 'قانونِ تلازمہ', 'قانونِ مبادلہ', 'قانون لاگو', 'قانون تقسیمی', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2495, 'n', 'کونسی نولین مساوات قانون مبادلہ کو ظاہر کرتی ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a+b=b+a</span>', '<span dir=''rtl''>ab=ba</span>', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2496, 'n', 'بولین الجبرا میں <span dir=''rtl''> A.1</span> برابر ہے۔', 'mcq', '<span dir=''rtl''> A </span>', '1', '0', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2497, 'n', 'بولین الجبرا میں <span dir=''rtl''>A+1</span> برابر ہے۔', 'mcq', '1', '0', '<span dir=''rtl''> A</span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2498, 'n', 'بولین الجبرا میں <span dir=''rtl''>A+0</span> برابر ہے۔', 'mcq', '<span dir=''rtl''>A</span>', '1', '0', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2499, 'n', 'بولین الجبرا میں <span dir=''rtl''>A.A </span> برابر ہے۔', 'mcq', '<span dir=''rtl''>A</span>', '0', '1', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2500, 'n', 'بولین الجبرا میں <span dir=''rtl''>A+A</span> برابر ہے۔', 'mcq', '<span dir=''rtl''>A</span>', '0', '1', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2501, 'n', 'بولین الجبرا میں <span dir=''rtl''> A + <span style="text-decoration:overline;">A</span></span> برابر ہے۔', 'mcq', '1', '0', '<span dir=''rtl''>>A</span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2502, 'n', 'بولین الجبرا میں <span dir=''rtl''> A.<span style="text-decoration:overline;">A</span></span> برابر ہے۔', 'mcq', '0', '1', '<span dir=''rtl''>A</span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span></span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2503, 'n', 'ایک ایکسپریشن <span style="text-decoration:overline;">ABC</span> پر ڈی مارگن قانون لاگو کرنے سے حاصل ہوتا ہے۔', 'mcq', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span>+<span style="text-decoration:overline;">B</span>+<span style="text-decoration:overline;">C</span></span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A+B+C</span></span>', '<span dir=''rtl''> A + <span style="text-decoration:overline;">B</span>+C<span style="text-decoration:overline;">C</span></span>', '<span dir=''rtl''>A(B+C)</span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2504, 'n', 'ایک ایکسپریشن <span style="text-decoration:overline;">A+B+C+D</span> پر ڈی مارگن قانون لاگو کرنے سے حاصل ہوتا ہے۔', 'mcq', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span><span style="text-decoration:overline;">B</span><span style="text-decoration:overline;">C</span><span style="text-decoration:overline;">D</span></span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span>+<span style="text-decoration:overline;">B</span>+<span style="text-decoration:overline;">C</span>+<span style="text-decoration:overline;">D</span></span>', '<span dir=''rtl''> <span style="text-decoration:overline;">A</span>+B+C+<span style="text-decoration:overline;">D</span></span>', '<span dir=''rtl''> A+<span style="text-decoration:overline;">B</span>+<span style="text-decoration:overline;">C</span>+D</span>', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2505, 'n', 'کس فنکشن میں ہر ٹرم مِن ٹرم کہلاتی ہے؟', 'mcq', 'سٹینڈرڈ پراڈکٹ', 'سٹینڈرڈ جمع ', 'ہائی برڈ', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2506, 'n', 'کس فنکشن میں ہر ٹرم میکس ٹرم کہلاتی ہے؟', 'mcq', 'سٹینڈرڈ جمع', 'سٹینڈرڈ پراڈکٹ', 'ہائی برڈ', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2507, 'n', 'تین متغیرات کیساتھ کارناف میپ میں ہوتے ہیں۔', 'mcq', '8 سیل', '16 سیل', '4 سیل', '2 سیل', '##', '##', NULL, 00052, 0);
INSERT INTO `questions` VALUES(2508, 'n', 'سافٹ وئیر کی دو اقسام ہیں۔', 'mcq', 'ایپلی کیشن اور سسٹم', 'سسٹم اور ڈیزائن', 'ایپلی کیشن اور ڈیزائن', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2509, 'n', 'درج ذیل میں سے ایپلی کیشن سافٹ وئیر کونسا ہے؟', 'mcq', 'مائیکروسافٹ ایکسل', 'لینکس', 'ونڈوز', 'ڈاس', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2510, 'n', 'آپریٹنگ سسٹم کو سمجھا جاتا ہے۔', 'mcq', 'سسٹم سافٹ وئیر', 'میموری', 'ایپلی کیشن سافٹ وئیر', 'کمپیوٹر ہارڈوئیر', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2511, 'n', 'کس قسم کا سافٹ وئیر سسٹم سافٹ وئیر نہیں ہے؟', 'mcq', 'سپریڈشیٹ سافٹ وئیر', 'آپریٹنگ سسٹم', 'لینگویج ٹرانسلیٹر', 'یوٹیلیٹی پروگرام', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2512, 'n', 'آپریٹنگ سسٹم درج ذیل میں سے کونسی خدمات مہیا کرتا ہے؟', 'mcq', 'ہارڈ وئیر کی تنظیم', 'یوزرانٹرفیس', 'پروگرام لوڈکرنا اور چلانا', 'تمام', '##', 'تمام', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2513, 'n', 'لینگویج ٹرانسلیٹر کی کتنی اقسام ہیں؟', 'mcq', '3', '1', '2', '4', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2514, 'n', 'کونسا پروگرام اسمبلی لینگویج کوڈ کو مشین کوڈ میں تبدیل کرتا ہے؟', 'mcq', 'اسمبلر', 'کمپائلر', 'انٹرپریٹر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2515, 'n', 'کونسا پروگرام سورس پروگرام کو ایک ہی بار آبجیکٹ پروگرام میں تبدیل کرتا ہے؟', 'mcq', 'کمپائلر', 'انٹرپریٹر', 'اسمبلر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2516, 'n', 'کونسا پروگرام ایک وقت میں سورس پروگرام کی ایک لائن کا ترجمہ کر کے چلاتا ہے؟', 'mcq', 'انٹر پریٹر', 'کمپائلر', 'اسمبلر', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2517, 'n', 'درج ذیل میں سے کونسا یوزرانٹرفیس نہیں ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'سسٹم انٹرفیس', 'ڈیزائن انٹرفیس', 'کمانڈلائن', '<span dir=''rtl''>a اور b دونوں</span>', 'کمانڈلائن', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2518, 'n', 'کونسا انٹرفیس ونڈوز اور آیکون استعمال کرتا ہے؟', 'mcq', 'گرافیکل یوزر', 'ونڈوزاورئنٹڈ', 'کمانڈ ڈریون', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2519, 'n', 'درج ذیل کمانڈ کس قسم کے انٹرفیس کی مثال ہے؟ <span dir=''rtl''>COPY a:\\MEMO.DOC C:\\LETTER.DOC</span>', 'mcq', 'کمانڈ لائن', 'انسٹرکشن ڈریون', 'ڈاریکٹوبیسڈ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2520, 'n', 'ڈاس کا انٹرفیس کہلاتا ہے؟', 'mcq', 'کمانڈ لائن انٹرفیس', 'مینیوانٹرفیس', 'ڈیزائن انٹرفیس', 'سسٹم انٹرفیس', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2521, 'n', 'ڈاس میں استعمال کنندہ آپریٹنگ سسٹم سے رابطہ کرنے کیلئے دیتا ہے۔', 'mcq', 'کمانڈز', 'ہدایات', 'روٹین', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2522, 'n', 'کونسی فائل میں ڈاس کی اندرونی کمانڈز ہوتی ہیں؟', 'mcq', 'کمانڈ فائل', 'ایگزیکیوٹ ایبل فائل', 'بیچ فائل', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2523, 'n', 'بیچ فائل کی ایکسٹینشن ہوتی ہے۔', 'mcq', '<span dir=''rtl''>.bat</span>', '<span dir=''rtl''>.com</span>', '<span dir=''rtl''>.exe</span>', '<span dir=''rtl''>a اور c دونوں</span>', '##', '<span dir=''rtl''>a اور c دونوں</span>', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2524, 'n', 'ڈاس میں کمانڈز کی اقسام ہیں۔', 'mcq', '2', '1', '4', '6', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2525, 'n', 'درج ذیل میں سے ڈاس کی اندرونی کمانڈ نہیں ہے', 'mcq', '<span dir=''rtl''>XCOPY</span>', '<span dir=''rtl''>MD</span>', '<span dir=''rtl''>VER</span>', '<span dir=''rtl''>DATE</span>', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2526, 'n', 'درج ذیل میں سے ڈاس کی بیرونی کمانڈ نہیں ہے', 'mcq', '<span dir=''rtl''>CD</span>', '<span dir=''rtl''>FORMAT</span>', '<span dir=''rtl''>TREE</span>', '<span dir=''rtl''>DISKCOPY</span>', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2527, 'n', 'ڈاس میں بیک سلیش کس کے حصے کے طور پر استعمال ہوتی ہے؟', 'mcq', 'پاتھ', 'سوئچ', 'سنٹیکس', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2528, 'n', 'ڈاس میں فارورڈ سلیش ظاہر کرتا ہے۔', 'mcq', 'سوئچ', 'سنٹیکس', 'پاتھ', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2529, 'n', 'نئی ڈائریکٹری بنانے کیلئے کونسی ڈاس کمانڈ استعمال ہوتی ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>MD</span>', '<span dir=''rtl''>MKDIR</span>', '<span dir=''rtl''>MDDIR</span>', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>MDDIR</span>', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2530, 'n', 'کونسا وائلڈ کارڈ نامعلوم حرف کو ظاہر کرتا ہے؟', 'mcq', '<span dir=''rtl''>?</span>', '<span dir=''rtl''>*</span>', '<span dir=''rtl''>a یا b</span>', 'کوئی نہیں', '<span dir=''rtl''>a یا b</span>', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2531, 'n', 'کونسا وائلڈ کارڈ کئی نامعلوم حروف کو ظاہر کرتا ہے؟', 'mcq', '<span dir=''rtl''>*</span>', '<span dir=''rtl''>?</span>', '<span dir=''rtl''>a یا b</span>', 'کوئی نہیں', '<span dir=''rtl''>a یا b</span>', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2532, 'n', 'ڈائریکٹری کی لسٹ کو ایک وقت میں ایک سکرین پر دیکھنے کیلئے کونسا پیرامیٹر استعمال ہوتا ہے؟ ', 'mcq', '<span dir=''rtl''>Pause</span>', '<span dir=''rtl''>Screen</span>', '<span dir=''rtl''>Hold</span>', '<span dir=''rtl''>More</span>', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2533, 'n', '<span dir=''rtl''>Del *.* </span> کمانڈ ختم کرے گی', 'mcq', 'تمام فائلیں', 'دو فائلیں', 'تین فائلیں', 'چار فائلیں', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2534, 'n', 'کونسی کمانڈ کنٹرول کو ایک قدم اوپر والی ڈائریکٹری یعنی پیرنٹ ڈائریکٹری میں لیکر جائیگی؟', 'mcq', '<span dir=''rtl''>CD..</span>', '<span dir=''rtl''>CD/</span>', '<span dir=''rtl''>CD.</span>', '<span dir=''rtl''>CD\\</span>', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2535, 'n', 'وائلڈ کارڈ', 'mcq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2536, 'n', 'وائلڈ کارڈ <span dir=''rtl''>Letters.?xt</span> کو استعمال کرتے ہوئے کونسی فائل تلاش کی جائیگی؟', 'mcq', 'تمام', '<span dir=''rtl''>Letters.txt</span>', '<span dir=''rtl''>Letters.xxt</span>', '<span dir=''rtl''>Letters.axt</span>', '##', 'تمام', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2537, 'n', 'داس میں کتنے وائلڈ کارد استعمال ہوتے ہیں؟', 'mcq', '2', '1', '6', '4', '##', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2538, 'n', 'کونسی کمانڈ ڈائریکٹری کو اس کے مندرجات سمیت ختم کرتی ہے؟', 'mcq', '<span dir=''rtl''>DELTREE</span>', '<span dir=''rtl''>RD</span>', '<span dir=''rtl''>DEL</span>', '<span dir=''rtl''>a اور b دونوں</span>', '<span dir=''rtl''>a اور b دونوں</span>', '##', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2539, 'n', 'وائلڈ کارڈ <span dir=''rtl''>DEL</span> کو استعمال سے کونسی فائل تلاش کی جائیگی؟', 'mcq', 'تمام', '<span dir=''rtl''>Letters.ppt</span>', '<span dir=''rtl''>Letters.txt</span>', '<span dir=''rtl''>Letters.doc</span>', '##', 'تمام', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2540, 'n', '<span dir=''rtl''>ونڈوز:</span>', 'mcq', '<span dir=''rtl''>GUI</span> رکھتی ہے۔', 'آپریٹنگ سسٹم نہیں ہے۔', 'کمپائلر ہے', 'پہلے تینوں', '##', 'پہلے تینوں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2541, 'n', '<span dir=''rtl''>DOS:</span>', 'mcq', 'آپریٹنگ سسٹم ہے۔', 'آپریٹنگ سسٹم نہیں ہے۔', 'گرافیکل یوزرانٹرفیس رکھتی ہے۔', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2542, 'n', 'انٹر پریٹر ترجمہ کرتا ہے۔', 'mcq', 'لائن بہ لائن سورس پروگرام کو', 'لائن بہ لائن اسمبلی پروگرام کو', 'مکمل سورس پروگرام کو', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2543, 'n', '<span dir=''rtl''>DIR ?lass.* </span> کمانڈ', 'mcq', 'تمام فائلوں کو جو کسی بھی کریکٹر سے شروع ہورہی ہیں، لیکن آخری چار کریکٹر <span dir=''rtl''>lass</span> ہیں  ', 'تمام فائلوں کو جن کے آخری چار کریکٹر  <span dir=''rtl''>lass</span> ہیں  اور ایکسٹینشن کوئی بھی ہو۔', 'تمام فائلوں کو جو کسی بھی کریکٹر سے شروع ہورہی ہیں اور ایکسٹینشن کوئی بھی ہے', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2544, 'n', '<span dir=''rtl''>RMDIR کمانڈ:</span> ', 'mcq', 'ڈائریکٹری ختم کرتی ہے', 'ڈائریکٹری بناتی ہے', 'فائل کاپی کرتی ہے۔', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2545, 'n', '<span dir=''rtl''> Prompt کمانڈ :</span>', 'mcq', 'پرومپٹ تبدیل کرتی ہے', 'فائل کے ختم ہونے کی تصدیق کرتی ہے', 'فائل ڈھونڈتی ہے', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2546, 'n', '<span dir=''rtl''>DIR *.* :</span>', 'mcq', 'تمام فائلوں کو لسٹ کرتی ہے۔', '<span dir=''rtl''>.doc </span> ایکسٹینشن والی تمام فائلوں کو لسٹ کرتی ہے۔', 'تمام فائلوں کو جن کا نام <span dir=''rtl''> sample </span> ہے لسٹ کرتی ہے۔', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00053, 0);
INSERT INTO `questions` VALUES(2547, 'n', 'ونڈوز ۔۔۔۔ کی مقبول ترین پراڈکٹ ہے۔', 'mcq', 'مائیکروسافٹ', 'ایپل', 'سن سسٹمز', 'آئی بی ایم', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2548, 'n', 'ڈیٹا فائلوں میں ہوتا ہے اور فائلیں ہوتی ہیں', 'mcq', 'ڈائریکٹریوں میں', 'ایکسٹینشن میں', 'بائنڈر میں', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2549, 'n', 'ڈیجیٹل ڈیٹا محفوظ کیا جاتا ہے', 'mcq', 'فائلوں میں', 'فولڈرز میں', 'ڈائریکٹریز میں', 'پاتھ میں', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2550, 'n', 'عام طور پر فلاپی ڈرائیو کو منسوب کیا جاتا ہے۔', 'mcq', '<span dir=''rtl''>A:\\</span>', '<span dir=''rtl''>F:\\</span>', '<span dir=''rtl''>E:\\</span>', '<span dir=''rtl''>C:\\</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2551, 'n', '<span dir=''rtl''>PhoneNumbers.txt میں txt ظاہر کرتا ہے۔</span>', 'mcq', 'ایکسٹینشن', 'فائل لوکیشن', 'فائل کا نام', 'ڈائریکٹری', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2552, 'n', 'فائل کے نام اور ایکسٹینشن کے درمیان ہوتا ہے۔', 'mcq', 'پیریڈ <span dir=''rtl''>۔</span>', 'سیمی کولن <span dir=''rtl''>;</span>', 'کولن <span dir=''rtl''>:</span>', 'کوما<span dir=''rtl''>,</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2553, 'n', 'ورڈ کی فائلوں کی ایکسٹینشن ہوتی ہے', 'mcq', '<span dir=''rtl''>doc</span>', '<span dir=''rtl''>xls</span>', '<span dir=''rtl''>ppt</span>', '<span dir=''rtl''>mdb</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2554, 'n', 'ایکسل کی فائلوں کی ایکسٹینشن ہوتی ہے', 'mcq', '<span dir=''rtl''>xls</span>', '<span dir=''rtl''>doc</span>', '<span dir=''rtl''>ppt</span>', '<span dir=''rtl''>mdb</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2555, 'n', 'فولڈر ہوتا ہے', 'mcq', 'فائلوں کا مجموعہ', 'ڈیٹا کا مجموعہ', 'آئیکون کا دوسرا نام', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2556, 'n', '<span dir=''rtl''>GUI مخفف ہے۔</span>', 'mcq', '<span dir=''rtl''>Graphical User Interface</span>', '<span dir=''rtl''>Graphs Utilities Icons</span>', '<span dir=''rtl''>General User Interrupt</span>', '<span dir=''rtl''>Grayed User Interface</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2557, 'n', 'ایک چھوٹی تصویر جو کسی پروگرام ، ہدایت یا فائل کو ظاہر کرتی ہے، کہلاتی ہے', 'mcq', 'آئیکون', 'کنٹرول نبٹن', 'مینیو', '<span dir=''rtl''>GUI</span>', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2558, 'n', 'ماؤس پوائنٹر کے ذریعے کسی آبجیکٹ کو چھُونے کا عمل کہلاتا ہے۔', 'mcq', 'پوائنٹ کرنا', 'کلک کرنا', 'ڈراپ کرنا', 'پاز کرنا', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2559, 'n', 'کام کرنے کی وہ جگہ جہاں ونڈوز، آئیکون، مینیوز اور ڈائیلاگ باکس ظاہر ہوتے ہیں، کہلاتے ہیں۔', 'mcq', 'ڈیسک ٹاپ', 'سکرین', 'ٹاسک بار', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2560, 'n', 'چلتے ہوئے پروگراموں کے درمیان سوئچ کرنے کیلئے استعمال ہوتا ہے۔', 'mcq', 'ٹاسک بار', 'ری سائیکل بِن', 'مائی ڈاکیومنٹس', 'سٹارٹ بٹن', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2561, 'n', 'کمپیوٹر سے ختم کی ہوئی تمام فائلیں محفوظ کی جاتی ہیں', 'mcq', 'ری سائکل بِن میں', 'ٹاسک بار میں', 'ونڈوز ایکسپلورر میں', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2562, 'n', 'سافٹ وئیر کو انسٹال اور ختم کرنے کیلئے ہے', 'mcq', 'کنٹرول پینل', 'ونڈوز ایکسپلورر', 'ٹاسک بار', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2563, 'n', 'فائلوں اور فولڈرز کی تنظیم کیلئے استعمال ہوتا ہے۔', 'mcq', 'ونڈوز ایکسپلورر', 'انٹرنیٹ ایکپلورر', 'ونڈوز اسیسریز', 'کنٹرول ہینل', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2564, 'n', 'انٹرنیٹ تک رسائی کیلئے استعمال ہوتا ہے۔', 'mcq', 'انٹرنیٹ ایکسپلورر', 'سٹارٹ بٹن', 'ری سائکل بِن', 'ونڈوز ایکسپلورر', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2565, 'n', 'کمپیوٹر پر انسٹال کیے گئے پروگراموں تک رسائی کیلئے استعمال ہوتا ہے۔', 'mcq', 'سٹارٹ بٹن', 'ونڈوز ایکسپلورر', 'انٹرنیٹ ایکسپلورر', 'مائی ڈاکیومنٹس', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2566, 'n', 'درج ذیل میں سے ماؤس ایونٹ ہے', 'mcq', 'تمام', 'دائیں کلک', 'بائیں کلک', 'ڈبل کلک', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2567, 'n', 'شارٹ کٹ کس لئے بنایا جاتا ہے؟', 'mcq', '<span dir=''rtl''>a اور b دونوں</span>', 'ایپلی کیشن یا ڈاکیومنٹ', 'فولڈر یا ڈرائیو', 'کوئی نہیں', '<span dir=''rtl''>a اور b دونوں</span>', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2568, 'n', 'شٹ داؤن آپشن موجود ہوتی ہے۔', 'mcq', 'سٹارٹ مینیو پر', 'ٹاسک بارپر', 'ڈیسک ٹاپ پر', 'ٹائٹل بار پر', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2569, 'n', 'اگر استعمال کنندہ فائل کو کلک کر کے اسی ڈرائیو پر موجود کسی فولڈر تک ڈریگ کرے تو کیا ہوتا ہے؟', 'mcq', 'فائل منتقل ہوجاتی ہے', 'فائل ختم ہوجاتی ہے', 'فائل کاپی ہوتی ہے', 'کوئی نہیں', '##', 'کوئی نہیں', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2570, 'n', 'ایسا پروگرام جو کمپیوٹر کی عمومی کارکردگی میں خلل ڈالتا ہے، کہلاتا ہے۔', 'mcq', 'وائرس', 'اینٹی وائرس', 'میکنٹوش', 'ونڈوز ایکسپلورر', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2571, 'n', 'ایسا پروگرام جو کمپیوٹر سے وائرس کو تلاش اور ختم کرتا ہے، کہلاتا ہے۔', 'mcq', 'اینٹی وائرس', 'وائرس', 'میکنٹوش', 'ایم ایس این', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2572, 'n', 'درج ذیل میں سے اینٹی وائرس پروگرام کی مثال کونسی ہے؟', 'mcq', 'تمام', 'پانڈا', 'مک ایفی', 'سیمنٹک', '##', '##', NULL, 00054, 0);
INSERT INTO `questions` VALUES(2573, 'n', 'How many types of networks are there?', 'mcq', '3', '2', '4', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2574, 'n', 'LAN stands for:', 'mcq', 'Local Area Network', 'Landline Area Network', 'Limited Area Network', 'Long Area Network', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2575, 'n', 'MAN stands for:', 'mcq', 'Metropolitan Area Network', 'Main Area Network', 'Mobile Area Network', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2576, 'n', 'WAN stands for:', 'mcq', 'Wide Area Network', 'Wipe Area Network', 'White Area Network', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2577, 'n', 'What are the area of LAN usage?', 'mcq', 'All of these', 'File transfer and access', 'Electronic message handling', 'Word and text processing', '##', 'All of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2578, 'n', 'ISP stands for:', 'mcq', 'Internet Service Provider', 'Information Service Provider', 'Introduction Sending Point', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2579, 'n', 'ISP stands for:', 'mcq', 'None of these', 'Introduction Sending Point', 'Introduction Service Provider', 'Information Service Provider', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2580, 'n', 'Dial up refers to an internet connection that is established using', 'mcq', 'Modem', 'Lan Card', 'Hub', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2581, 'n', 'There are .... command main types of modem.', 'mcq', '3', '2', '4', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2582, 'n', 'There are .... command main types of twisted pair cables.', 'mcq', '2', '3', '4', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2583, 'n', 'UTP stands for:', 'mcq', 'Unshielded Twisted Pair', 'Un Twisted Pair', 'Unseen Twisted Pair', 'None of these', '##', 'None of these', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2584, 'n', 'The information or data that is to be communicated is called', 'mcq', 'Message', 'Medium', 'Text data', 'Real data', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2585, 'n', 'Transfer of data or information form one location to another is called', 'mcq', 'Data Communication', 'Connectivity of System', 'Signallings', 'Data Representation', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2586, 'n', 'Communication between a computer and a keyboard involves a', 'mcq', 'Simplex Transmission', 'Half Duplex Transmission', 'Full Duplex Transmission', 'Automatic Transmission', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2587, 'n', 'The physical path over in a message travels is called', 'mcq', 'Medium', 'Protocol', 'Signals', 'Devices', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2588, 'n', 'Transmission media categorized into ... types', 'mcq', '2', '3', '4', '5', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2589, 'n', 'Guided media are the', 'mcq', 'Physical Devices', 'Soft Devices', 'Logical Devices', 'Printing Devices', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2590, 'n', 'Another name of guided media is ', 'mcq', 'Bounded Media', 'Base Band Media', 'Unbounded Media', 'Broad Band Media', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2591, 'n', 'The data can be transmitted in both directions simultaneously is called', 'mcq', 'Full Duplex Mode', 'Multi Mode', 'Simplex Mode', 'Half Duplex Mode', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2592, 'n', 'The data is communicated only in one direction is called', 'mcq', 'Half Duplex Mode', 'Simplex Mode', 'Multi Mode', 'Full Duplex Mode', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2593, 'n', 'Radio broad casting and tv transmissions are example of', 'mcq', 'Simplex Mode Communication', 'Half Duplex Communication', 'Multi Communication', 'Full Duplex Communication', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2594, 'n', 'Which cable is of higher cost and difficult to install?', 'mcq', 'Fibre Optic Cable', 'Twisted Pair Cable', 'Simple Cable', 'Co-axial Cable', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2595, 'n', 'Co-axial cables can transfer data at a maximum rate of', 'mcq', '100 mbps', '150 mbps', '200 mbps', '50 mbps', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2596, 'n', 'Inside the fiber optic cable each stand is surrounded by a layer of ', 'mcq', 'glass', 'plastic', 'carbon', 'aluminum', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2597, 'n', 'A system consists of several earth stations and a satellite is called', 'mcq', 'Satellite Communication', 'Wireless Communication', 'Multi Communication', 'Microwave Communication', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2598, 'n', 'The processing of transferring a file from a remote computer to a local computer is called', 'mcq', 'downloading', 'uploading', 'browsing', 'transferring', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2599, 'n', 'The processing of transferring a file from a local computer to a remote computer is called', 'mcq', 'uploading', 'downloading', 'browsing', 'transferring', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2600, 'n', 'Modems are available into .... types', 'mcq', '3', '2', '4', '5', '##', '##', NULL, 00092, 0);
INSERT INTO `questions` VALUES(2601, 'n', 'A virus program is usually hidden in', 'mcq', 'the operating system and application programs', 'the operating system only', 'the disk drive', 'an application program only', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2602, 'n', 'Most computer crimes are committed by', 'mcq', 'Hackers', 'International Spies', 'Highly Trained Computer Consultants', 'Software', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2603, 'n', 'Types of software that can be freely distributed without violating copyright laws are called', 'mcq', 'both a and b', 'Shareware', 'Public Domain', 'opy Protected', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2604, 'n', 'A virus that replicates itself is called a ', 'mcq', 'Worm', 'Vaccine', 'Bug', 'Bomb', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2605, 'n', 'Security protection for personal computers include', 'mcq', 'Locks and cables', 'Internal components', 'Software', 'Devices', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2606, 'n', 'Another name for free software ', 'mcq', 'Public domain software', 'Encrypted Software', 'Copy protected software', 'Shareware', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2607, 'n', 'Another name for antivirus is', 'mcq', 'Vaccine', 'Worm', 'Trojan Horse', 'DES', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2608, 'n', 'A secret word or numbers to be typed in on a keyboard before any activity can take place is calld ', 'mcq', 'Password', 'Private Word', 'Data Encryption', 'Biometric Data', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2609, 'n', 'What is the most common computer crime?', 'mcq', 'Software Piracy', 'IRS Database', 'Extension of Bank Funds', 'Putting people on junk email list', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2610, 'n', 'E-Mail stands for:', 'mcq', 'Electronic Mail', 'Elected Mail', 'Easy Mail', 'English Mail', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2611, 'n', 'A secret code consisting of words, numbers or a combination words applied to the system that must b typed on the keyboard to get access is called ', 'mcq', 'Password', 'File', 'Security', 'Protection', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2612, 'n', 'The viruses that replicate themselves without user interaction are called  ', 'mcq', 'Worms', 'Threats', 'Protection', 'Virus', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2613, 'n', 'A computer virus is written in a ', 'mcq', 'computer language', 'human language', 'english language', 'binary language', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2614, 'n', 'The person who gains access to a computer system illegally is called', 'mcq', 'both a and b', 'hacker', 'cracker', 'theft', 'theft', 'both a and b', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2615, 'n', 'The right of a person to keep his or her personal information away from other people is called', 'mcq', 'Backup', 'Privacy', 'Copyright', 'Hacking', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2616, 'n', 'Antivirus program will', 'mcq', 'both a and b', 'Quarantine virus', 'Eliminate virus', 'make virus harmful', 'make virus harmful', 'both a and b', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2617, 'n', 'Companies that are writing antivirus softwares  ', 'mcq', 'MacAfee', 'Symantec', 'Panda', 'all of these', '##', 'all of these', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2618, 'n', 'A software that is used to detect and remove a virus on a computer system is called', 'mcq', 'Antivirus', 'Virus Cleaner', 'Virus Remover', 'Empty Virus', '##', '##', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2619, 'n', 'A program or set of program that cause extensive damage to your computer is called', 'mcq', 'Virus', 'Bacteria', 'Extensive Program', 'all of these', '##', 'all of these', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2620, 'n', 'A computer virus is passed from computer to computer through', 'mcq', 'Download Files', 'E-Mail', 'Floppy Disks', 'all of above', '##', 'all of above', NULL, 00093, 0);
INSERT INTO `questions` VALUES(2621, 'n', 'زمین کا اوسط ماس ہے۔', 'mcq', '6.0 &times; 10 <sup>24</sup> kg', '6.0 &times; 10 <sup>100</sup> kg', '6.7 &times; 10 <sup>10</sup> kg', '7.2 &times; 10 <sup>7</sup>  kg', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(2622, 'n', '<span dir=''rtl''>1 مائیکرو سیکنڈ برابر ہے</span>', 'mcq', '<span dir=''rtl''>10<sup>-6 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-3 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-5 </sup>سیکنڈ</span>', '<span dir=''rtl''>10<sup>-4 </sup>سیکنڈ</span>', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(2623, 'n', 'زمین کا ریڈیس ہے۔', 'mcq', '6.4 &times;10<sup>6</sup> m', '6.9 &times;10<sup>8</sup> m', '6.4 &times;10<sup>-9</sup> m', '1.0 &times;10<sup>5-</sup>m', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(2624, 'n', 'چاند اور زمین کا فاصلہ ہے۔', 'mcq', '3.8 &times;10 <sup>8</sup>m', '3.8 &times;10 <sup>10</sup>m', '1.5 &times;10 <sup>11</sup>m', '2.0 &times;10 <sup>22</sup>m', '##', '##', NULL, 00035, 0);
INSERT INTO `questions` VALUES(2625, 'n', 'فورس اور ماس کا حوالہ دئیے بغیر اجسام کی موشن کو کہتے ہیں۔', 'mcq', 'مکینکس', 'ڈائنامکس', 'فزکس', 'تھرموڈائنامکس', '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(2626, 'n', 'اجسام کی حرکت پر فورس کے اثرات کے مطالعے کا علم کہلاتا ہے۔', 'mcq', 'ڈائنامکس', 'مکینکس', 'تھرموڈائنامکس', 'ایکسلریشن', '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(2627, 'n', 'درج ذیل میں سے کونسی چیز مختلف ہے۔', 'mcq', 'درخت کا بڑھنا', 'بچے کا سڑک پر دوڑنا', 'تتلی کا اُڑنا', 'چلتی ہوئی گاڑی', '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(2628, 'n', 'آزادانہ گرتے ہوئے جسم کی ایک مثال ہے۔', 'mcq', 'لینئیر موشن', 'ٹرانسلیٹری موشن', 'سرکلر موشن', 'رینڈم موشن', '##', '##', NULL, 00039, 0);
INSERT INTO `questions` VALUES(2629, 'n', 'Excel is used to solve .... problems', 'mcq', 'Numeric, Non-Numeric, Complex', 'Complex', 'Numeric and Non-Numeric', 'Simple', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2630, 'n', 'We use the following things in Excel', 'mcq', 'All of the above', 'Built-in Functions', 'Charts', 'Formulas', '##', 'All of the above', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2631, 'n', 'Excel may be used in following fields', 'mcq', 'Stock/Inventory control', 'Sales Forecasting', 'Sales and Cost Analysis', 'Financial Reports', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2632, 'n', 'By default the width of column in EXcel is', 'mcq', '8.43', '12.75', '8.75', '7.42', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2633, 'n', 'By default height of the row in Excel is', 'mcq', '12.75', '8.75', '10.15', '8.43', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2634, 'n', 'Extension of Excel file is', 'mcq', '.xls', '.doc', '.exl', '.xli', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2635, 'n', 'The top most bar of the Excel screen contain file name is called', 'mcq', 'Title bar', 'Menu bar', 'Formatting bar', 'Name box', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2636, 'n', 'The bar in which each item contains list of options to be selected is called', 'mcq', 'Title bar', 'Menu bar', 'Formatting bar', 'Name box', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2637, 'n', 'Name of rows in Excel is', 'mcq', '65,536', '65,356', '65,535', '65,531', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2638, 'n', 'Numbers of columns inExcel are', 'mcq', '256', '526', '652', '265', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2639, 'n', 'The formula that we put, appears in ', 'mcq', 'Formula Bar', 'Sheet Bar', 'Status Bar', 'Scroll Bar', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2640, 'n', '... option moves existing cell to the right and inserts one cell', 'mcq', 'Shift Cell Right', 'Entire Row', 'Shift Cell Down', 'Entire Column', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2641, 'n', 'By default font name in Excel is', 'mcq', 'Arial', 'Times New Roman', 'Arial Black', 'Tahoma', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2642, 'n', 'By default font size in Excel is', 'mcq', '10', '11', '12', '8', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2643, 'n', 'By default font color in Excel is', 'mcq', 'Automatic', 'Black', 'White', 'Grey', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2644, 'n', 'Bar used for color setting and font work is called', 'mcq', 'Formatting bar', 'Title bar', 'Menu bar', 'Name box', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2645, 'n', 'Address of each cell appears in', 'mcq', 'Name box', 'Formatting bar', 'Menu bar', 'Title bar', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2646, 'n', '.... bar is used up-down and left-right movement of the screen', 'mcq', 'Scroll bar', 'Status bar', 'Sheet bar', 'Formula bar', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2647, 'n', 'Three modes named Ready, Enter and Edit can be seen by using ... bar', 'mcq', 'Status bar', 'Formattinh bar', 'Table bar', 'Formula bar', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2648, 'n', 'List of sheets is given in', 'mcq', 'Sheet bar', 'Menu bar', 'Status bar', 'Formula bar', '##', '##', NULL, 00094, 0);
INSERT INTO `questions` VALUES(2649, 'n', 'The flow chart should be', 'mcq', 'All of these', 'Clear', 'Neat', 'Easy', '##', 'All of these', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2650, 'n', 'Direction of flow chart is from', 'mcq', 'both a and b', 'top to bottom', 'left to right', 'right to left', 'both a and b', 'right to left', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2651, 'n', 'How many flow lines should come out from a process symbol?', 'mcq', 'Only one', 'Three', 'Two', 'Infinite', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2652, 'n', 'How many flow lines must leave a decision symbol?', 'mcq', 'Two', 'Three', 'Only one', 'Infinite', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2653, 'n', 'How many flow lines must for the decision symbol?', 'mcq', 'Infinite', 'Two', 'Three', 'Only one', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2654, 'n', 'How many flow lines are used in conjunct with terminating symbol?', 'mcq', 'Only one', 'Only two', 'Only three', 'Only four', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2655, 'n', 'Which symbol is used to reduce number of flow lines?', 'mcq', 'Connector', 'None of these', 'processing', 'Input/Output', '##', 'None of these', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2656, 'n', 'The flow chart helps in ', 'mcq', 'Debugging errors', 'Typing errors', 'Solving keyboard errors', 'Testing errors', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2657, 'n', 'It is difficult to draw flow chart for', 'mcq', 'Complex problems', 'Simple problems', 'Average problems', 'Multi problems', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2658, 'n', 'The pictorial representation of an algorithm is ', 'mcq', 'Flow Chart', 'Updates the program', 'Document the program', 'None of these', '##', 'None of these', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2659, 'n', 'Which is a block diagram that reveals the structure and purpose of the program?', 'mcq', 'Flow Chart', 'Flow Lines', 'Decision', 'Rectangle', '##', '##', NULL, 00095, 0);
INSERT INTO `questions` VALUES(2660, 'n', 'How many possible solutions are there for a problem?', 'mcq', 'Multiple', 'Three', 'Two', 'One', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2661, 'n', 'Program up gradation refers to', 'mcq', 'Program enhancement', 'Program identification', 'Program development', 'Program implementation', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2662, 'n', 'Which of the following tasks are performed by most of the algorithms', 'mcq', 'All of these', 'Processing', 'Output', 'Input', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2663, 'n', 'Typographical errors in BASIC statements are', 'mcq', 'Syntax errors', 'Execution errors', 'Logical errors', 'Runtime errors', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2664, 'n', 'The diamond symbol represents the', 'mcq', 'Dcision making', 'Processing', 'Remarks', 'Input/Output', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2665, 'n', 'Division by zero is', 'mcq', 'Runtime error', 'Not an error', 'Logical error', 'Syntax error', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2666, 'n', 'Which of the following documents describe various feature of the software and the way it is used?', 'mcq', 'Test document', 'Software requirement specification', 'Problem  description', 'user guide', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2667, 'n', 'Algorithm is a ', 'mcq', 'Design document', 'User guide', 'Requirement document', 'Test document', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2668, 'n', 'The technique "Divide and Conquer" is used to solve', 'mcq', 'Complex and large problems', 'Complex problems', 'Simple problems', 'Large problems', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2669, 'n', 'The set of instructions given to the computer is called', 'mcq', 'Program', 'Input device', 'Document', 'Processing device', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2670, 'n', 'In what process, finding and removing errors in a program?', 'mcq', 'Debugging', 'Runtime errors', 'Syntax errors', 'None of these', '##', 'None of these', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2671, 'n', 'BASIC is a ', 'mcq', 'High level language', 'Low level level language', 'Assembly language', 'Machine language', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2672, 'n', 'How many steps are involved in solving the problem?', 'mcq', 'Nine', 'THree', 'Five', 'Seven', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2673, 'n', 'In which stage , problem is observed carefully?', 'mcq', 'Problem identification', 'Analyze the problem', 'Coding', 'Debugging', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2674, 'n', 'In which stage, problem is decomposed into sub problems?', 'mcq', 'Analyze the problem', 'Debugging', 'Coding', 'Design algorithm', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2675, 'n', 'Designing the algorithm requires to develop a list of steps to solve problems', 'mcq', 'Finite', 'Two time', 'Single time', 'Infinite', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2676, 'n', 'Algorithm has been designed and it verified through', 'mcq', 'Desk Checking', 'Draw Flow Chart', 'Top Down Design', 'Processing', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2677, 'n', 'the conversion of an algorithm to program written in any programming language is', 'mcq', 'Coding', 'Logical Errors', 'Algorithm', 'None of these', '##', 'None of these', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2678, 'n', 'What is the process of finding and removing errors in a program?', 'mcq', 'Debugging', 'Coding', 'Desk Checking', 'Implement the Program', '##', '##', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2679, 'n', 'An error comes when the program violates one or more grammatical rules of the programming language', 'mcq', 'Syntax', 'Logical', 'Runtime', 'None of these', '##', 'None of these', NULL, 00096, 0);
INSERT INTO `questions` VALUES(2680, 'n', 'There are mainly ......  types of software', 'mcq', 'Two', 'Three', 'Four', 'Five', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2681, 'n', 'In C/C++ the #include is called', 'mcq', 'Preprocessor directive', 'Header File', 'Statement', 'Function', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2682, 'n', '&& is ..... operator.', 'mcq', 'Logical', 'An Arithmetic', 'Relational', 'Unary', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2683, 'n', 'In flow chart, the symbol used for decision making is', 'mcq', 'Diamond', 'Circle', 'Arrow', 'Rectangle', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2684, 'n', 'The correct syntax of do-while loop is', 'mcq', 'do { statements; } while (condition);', '(condition ) while; do { statements; };', '{ statements; } do-while ();', 'while(condition); do { statements; };', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2685, 'n', 'C++ views each file as a sequential stream of ....', 'mcq', 'Bytes', 'Bits', '0’s or 1’s', 'Words', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2686, 'n', 'If the elements of an array are already sorted then the useful search algorithm is', 'mcq', 'Binary search', 'Linear Search', 'Quick Search', 'Random Search', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2687, 'n', 'The address operator (&) can be used with', 'mcq', 'Variable', 'Constant', 'Expression', 'Statement', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2688, 'n', 'When a pointer is incremented, it actually jumps the number of memory addresses', 'mcq', 'According to data type', '1 byte exactly', '1 bit exactly', 'A pointer variable can not be incremented', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2689, 'n', 'Each pass through a loop is called a/an', 'mcq', 'Iteration', 'Enumeration', 'Culmination', 'Pass through', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2690, 'n', 'Which of the following is the starting index of an array in C++?', 'mcq', '0', '1', '-1', 'any number', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2691, 'n', 'The return type of a function that do not return any value must be  ....', 'mcq', 'void', 'int', 'double', 'float', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2692, 'n', 'Which of the following is an extension of header file?', 'mcq', '.h', '.c', '.txt', '.exe', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2693, 'n', 'We want to access array in random order which approach is better?', 'mcq', 'Pointers', 'Array index', 'Both pointers and array index are better', 'None of the given options.', 'Both pointers and array index are better', 'None of the given options.', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2694, 'n', 'When we declare a multidimensional array the compiler store the elements of multidimensional array in the form of', 'mcq', 'Contiguous memory location', 'Columns', 'Rows', 'Matrix', '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2695, 'n', 'Find out error in the code given below: <br />\r\nif ( num % 2 = 0 )<br />\r\ncout << "The number is even" << endl;<br />\r\nif ( num % 2 = 0 ) Marks:2\r\n', 'sq', 'There should be extra = sign following is right statement <br /> if ( num % 2 = =0 )', NULL, NULL, NULL, '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2696, 'n', 'How learning to design programs is like learning to play soccer? [Marks:3]', 'sq', '“Learning to design programs is like learning to play soccer. A player must learn to trap a ball, to dribble with a ball, to pass, and to shoot a ball. Once the player knows those basic skills, the next goals are to learn to play a position, to play certa', NULL, NULL, NULL, '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2697, 'n', 'How learning to design programs is like learning to play soccer?', 'sq', '“Learning to design programs is like learning to play soccer. A player must learn to trap a ball, to dribble with a ball, to pass, and to shoot a ball. Once the player knows those basic skills, the next goals are to learn to play a position, to play certain strategies, to choose among feasible strategies, and, on occasion, to create variations of a strategy because none fits. “', NULL, NULL, NULL, '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2698, 'n', 'Write the procedure of data insertion in middle of the files by Merge Method practiced in older systems? [Marks:5]', 'sq', '• Opened the data file and a new empty file. <br /> • Started reading the data file from beginning of it. <br />• Kept on copying the read data into the new file until the location we want to insert data into is reached.  <br />• Inserted (appended) new data in the new file. <br />• Skipped or jumped the data in the data file that is to be overwritten or replaced.  <br />• Copied (appended) the remaining part of the file at the end of the new file', NULL, NULL, NULL, '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2699, 'n', 'Write a recursive function that takes three arguments (an integer array, starting subscript ‘s’ and\r\nending subscript ‘e’ ).\r\nIn first recursive call, the function should display the array from subscript ‘s’ (s = 0) to ‘e’ (e =\r\nsize of array). In each successive call, the function should print the array from index s+1 to e. T\r\nfunction should stop processing and return when starting subscript becomes equal to ending\r\nsubscript.\r\nFor example, if user enters values for array 2, 3, 4, 5, 6 then the recursive function must display the following output.<br />\r\n2 3 4 5 6 <br />\r\n3 4 5 6 <br />\r\n4 5 6 <br />\r\n5 6 <br />\r\n6', 'sq', '#include <iostream.h>; <br />void PrintArray(int arrayInput[], int &s, int &e); <br />main ( ) <br /> { int pause; <br />int TestArray [6] = {1,2,3,4,5,6}; <br />int StartPoint = 0; <br />int EndPoint = 5; <br />PrintArray(TestArray , StartPoint, EndPoint); <br />cout<<"\\n"; PrintArray(TestArray , Star', '', NULL, NULL, '##', '##', NULL, 00097, 0);
INSERT INTO `questions` VALUES(2700, 'n', 'What is the function of flagella in bacteria?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2701, 'n', 'Tell the names of antibiotics obtained from bacteria.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2702, 'n', 'Give three advantages and disadvantages of bacteria.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2703, 'n', 'Define vascular tissues.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2704, 'n', 'What are the salient features of monocots?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2705, 'n', 'What are the advantages of flowering plants?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2706, 'n', 'What is meant by classification? Why it is necessary for living organisms?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2707, 'n', 'What is meant by SARS?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2708, 'n', 'What is meant by sterilization?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2709, 'n', 'Tell the names of famous conifers in Pakistan.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2710, 'n', 'What are mushrooms?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2711, 'n', 'Differentiate allotropes and hetrotrope.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2712, 'n', 'Species are not able to sexually reproduce with individuals of ', 'mcq', 'other species', 'same species', 'same species and other species', 'none of these', '##', 'none of these', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2713, 'n', 'Outer part of virus is called as', 'mcq', 'coat', 'DNA', 'collar', 'core', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2714, 'n', 'Organisms that are so small and they can not be seen with naked eye are', 'mcq', 'micro organisms', 'giga organisms', 'macro organisms', 'mega organisms', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2715, 'n', 'Bacteria which live on other living organisms for their nutrition are called', 'mcq', 'parasitic bacteria', 'pathogenic bacteria', 'autotrophic bacteria', 'heterotrophic bacteria', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2716, 'n', 'Bacteria maintain soil fertility by adding', 'mcq', 'nitrogen', 'sulpher', 'hydrogen', 'oxygen', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2717, 'n', 'Food is sterilized under pressure for', 'mcq', '12-90 minutes', '20-25 minutes', '45-48 minutes', '50-90 minutes', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2718, 'n', 'Antibiotics obtained from bacteria destroy harmful ', 'mcq', 'bacteria', 'animals', 'plants', 'viruses', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2719, 'n', 'Pasteurization is used commonly for preventing the spoiling of ', 'mcq', 'milk', 'fruits', 'vegetables', 'juices', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2720, 'n', 'Fungi act as decomposers because they convert ', 'mcq', 'complex compounds into simple ones', 'smaller compounds into larger ones', 'simple compounds into complex ones', 'large compounds into smaller ones', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2721, 'n', 'Disease causing bacteria are known as', 'mcq', 'pathogenic bacteria', 'sapro trophic bacteria', 'autotrophic bacteria', 'heterotrophic bacteria', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2722, 'n', 'Milk is pasteurized by heating it at', 'mcq', '71<sup>0</sup>C for 15 seconds', '62<sup>0</sup>C for 15 seconds', '71<sup>0</sup>C for 32 seconds', '62<sup>0</sup>C for 50 seconds', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2723, 'n', 'Algae prepare their own food through photosynthesis, that is why they are called ', 'mcq', 'auto trophes', 'hetero trophes', 'parasites', 'saprophytes', '##', '##', NULL, 00098, 0);
INSERT INTO `questions` VALUES(2724, 'n', 'What is Information Technology?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2725, 'n', 'Write some applications of Information Technology.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2726, 'n', 'What is digital convergence?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2727, 'n', 'Define Software.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2728, 'n', 'What is hardware?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2729, 'n', 'Give some examples of hardware somponents.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2730, 'n', 'What is data?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2731, 'n', 'What is Information?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2732, 'n', 'What is computer?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2733, 'n', 'List major components of a computer with their functions.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2734, 'n', 'What is system software?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2735, 'n', 'What is application software?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2736, 'n', 'What is operating system?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2737, 'n', 'What is the relationship of software and hardware?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2738, 'n', 'What is utility program?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2739, 'n', 'What is customized software?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2740, 'n', 'Define package software with examples.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2741, 'n', 'What is input?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2742, 'n', 'What are input devices?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2743, 'n', 'List different categories of input devices.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2744, 'n', 'Write names of some commonly used input devices.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2745, 'n', 'What do you know about keyboards?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2746, 'n', 'What is enhanced keyboard? Which additional keys are available on it?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2747, 'n', 'What do you mean by QWERTY?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2748, 'n', 'What are pointing devices?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2749, 'n', 'List some examples of pointing devices.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2750, 'n', 'What so you know about mouse?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2751, 'n', 'Identify two alternatives to a mouse.', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2752, 'n', 'Identify common input devices that you have personally used. ', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2753, 'n', 'What is track ball?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2754, 'n', 'What is touch pad or track pad?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2755, 'n', 'What is touch screen?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);
INSERT INTO `questions` VALUES(2756, 'n', 'What is pointing stick?', 'sq', NULL, NULL, NULL, NULL, '##', '##', NULL, 00114, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `__id` int(4) NOT NULL auto_increment,
  `room_name` varchar(128) NOT NULL default 'Main Room',
  `creator` varchar(64) NOT NULL,
  `no_of_users` int(3) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '000.000.000.000',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`__id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` VALUES(1, 'Main Room', 'Ejaz', -1, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(2, 'goof', 'Ejaz', 1, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(3, 'Free', '<<<<main bh hoon>>>>', 1, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(4, 'new', 'asz', 2, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(5, 'naya', 'asz', 1, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(6, 'ejaz', '<<<<main bh hoon>>>>', 1, '127.0.0.1', 0);
INSERT INTO `rooms` VALUES(7, 'pai', 'asz', 2, '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `scoreid` int(11) NOT NULL auto_increment,
  `username` varchar(20) collate utf8_unicode_ci default NULL,
  `score` int(11) default NULL,
  `acount` int(11) default NULL,
  `qcount` int(11) default NULL,
  `taken` int(11) default NULL,
  `qdate` date default NULL,
  PRIMARY KEY  (`scoreid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `scores`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stid` int(11) NOT NULL auto_increment,
  `lastname` varchar(20) collate utf8_unicode_ci default NULL,
  `firstname` varchar(20) collate utf8_unicode_ci default NULL,
  `username` varchar(20) collate utf8_unicode_ci default NULL,
  `password` varchar(100) collate utf8_unicode_ci default NULL,
  `email` varchar(100) collate utf8_unicode_ci default NULL,
  `role` varchar(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`stid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` VALUES(1, 'ejaz', 'ejaz', 'ejaz', '90e86e829f54510c34c07d854a406d98', 'phycomp01@gmail.com', 'admin');
INSERT INTO `students` VALUES(4, 'hasan', 'ejaz', 'ejazhasan', 'd3a9edf7a9ac46d4b02e83d9c84004f7', 'ghs.iqbalsra.multan@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(4) unsigned zerofill NOT NULL auto_increment,
  `class_id` int(2) unsigned zerofill NOT NULL default '15',
  `subject_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `subject_medium` char(1) collate utf8_unicode_ci NOT NULL,
  `subject_enabled` varchar(1) collate utf8_unicode_ci NOT NULL default 'n',
  PRIMARY KEY  (`subject_id`),
  KEY `class_id` (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` VALUES(0001, 06, 'Computer Education', 'E', 'y');
INSERT INTO `subjects` VALUES(0002, 06, 'Science', 'E', 'n');
INSERT INTO `subjects` VALUES(0003, 06, 'Mathematics', 'E', 'n');
INSERT INTO `subjects` VALUES(0004, 06, 'English', 'E', 'n');
INSERT INTO `subjects` VALUES(0005, 06, 'اردو', 'U', 'n');
INSERT INTO `subjects` VALUES(0006, 09, 'کمپیوٹر سائنس', 'U', 'y');
INSERT INTO `subjects` VALUES(0007, 09, 'فزکس', 'U', 'y');
INSERT INTO `subjects` VALUES(0008, 09, 'کیمسٹری', 'U', 'n');
INSERT INTO `subjects` VALUES(0009, 09, 'بائیولوجی', 'U', 'n');
INSERT INTO `subjects` VALUES(0010, 11, 'Physics', 'E', 'n');
INSERT INTO `subjects` VALUES(0011, 13, 'Physics (Mechanics)', 'E', 'n');
INSERT INTO `subjects` VALUES(0012, 09, 'اردو', 'U', 'n');
INSERT INTO `subjects` VALUES(0013, 12, 'Physics', 'E', 'y');
INSERT INTO `subjects` VALUES(0014, 07, 'Computer Education', 'E', 'y');
INSERT INTO `subjects` VALUES(0015, 10, 'فزکس', 'U', 'y');
INSERT INTO `subjects` VALUES(0016, 10, 'کمپیوٹر سائنس', 'U', 'y');
INSERT INTO `subjects` VALUES(0017, 08, 'Asian Computer Science', 'E', 'y');
INSERT INTO `subjects` VALUES(0018, 15, 'CS201-Introduction to Programming', 'E', 'y');
INSERT INTO `subjects` VALUES(0019, 15, 'CS402-Theory of Automata', 'E', 'n');
INSERT INTO `subjects` VALUES(0020, 15, 'CS601-Data Communication', 'E', 'n');
INSERT INTO `subjects` VALUES(0021, 15, 'ENG201-Business and Technical English Writing', 'E', 'n');
INSERT INTO `subjects` VALUES(0022, 15, 'MTH202-Discrete Mathematics', 'E', 'n');
INSERT INTO `subjects` VALUES(0023, 15, 'STA301-Statistics and Probability', 'E', 'n');
INSERT INTO `subjects` VALUES(0024, 15, 'CS301-Data Structures', 'E', 'n');
INSERT INTO `subjects` VALUES(0025, 15, 'CS302-DLD', 'E', 'n');
INSERT INTO `subjects` VALUES(0026, 15, 'CS304-OOP', 'E', 'n');
INSERT INTO `subjects` VALUES(0027, 15, 'CS401-Comp Arch and Assembly', 'E', 'n');
INSERT INTO `subjects` VALUES(0028, 15, 'CS403-DBMS', 'E', 'n');
INSERT INTO `subjects` VALUES(0029, 15, 'MTH603-Numerical Analysis', 'E', 'n');
INSERT INTO `subjects` VALUES(0030, 15, 'CS619-Final Project', 'E', 'n');
INSERT INTO `subjects` VALUES(0031, 15, 'CS501-Advanced Comp Arch', 'E', 'n');
INSERT INTO `subjects` VALUES(0032, 15, 'CS502-Fundamentals of Algorithms', 'E', 'n');
INSERT INTO `subjects` VALUES(0033, 15, 'CS504-SE1', 'E', 'n');
INSERT INTO `subjects` VALUES(0034, 15, 'CS610-Computer Networks', 'E', 'n');
INSERT INTO `subjects` VALUES(0035, 15, 'CS614-Data Warehousing', 'E', 'n');
INSERT INTO `subjects` VALUES(0036, 15, 'CS506-Webdesign and Development', 'E', 'n');
INSERT INTO `subjects` VALUES(0037, 15, 'CS604-Operating Systems', 'E', 'n');
INSERT INTO `subjects` VALUES(0038, 15, 'CS605-SE2', 'E', 'n');
INSERT INTO `subjects` VALUES(0039, 15, 'CS607-AI', '', 'n');
INSERT INTO `subjects` VALUES(0040, 15, 'CS609-System Programming', 'E', 'n');
INSERT INTO `subjects` VALUES(0041, 08, 'Science', 'E', 'y');
INSERT INTO `subjects` VALUES(0042, 11, 'Computer Studies', 'E', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `surahs`
--

CREATE TABLE `surahs` (
  `surah_id` tinyint(3) unsigned zerofill NOT NULL auto_increment,
  `surah_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `starting_para_id` tinyint(2) unsigned zerofill NOT NULL default '30',
  `ending_para_id` tinyint(2) unsigned zerofill NOT NULL default '30',
  PRIMARY KEY  (`surah_id`,`surah_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=115 ;

--
-- Dumping data for table `surahs`
--

INSERT INTO `surahs` VALUES(001, 'سورة الفَاتِحَة', 01, 01);
INSERT INTO `surahs` VALUES(002, 'سورة البَقَرَة', 01, 02);
INSERT INTO `surahs` VALUES(003, 'سورة آل عِمرَان', 03, 04);
INSERT INTO `surahs` VALUES(004, 'سورة النِّسَاء', 04, 06);
INSERT INTO `surahs` VALUES(005, 'سورة المَائدة', 06, 07);
INSERT INTO `surahs` VALUES(006, 'سورة الاٴنعَام', 07, 08);
INSERT INTO `surahs` VALUES(007, 'سورة الاٴعرَاف', 08, 09);
INSERT INTO `surahs` VALUES(008, 'سورة الاٴنفَال', 09, 10);
INSERT INTO `surahs` VALUES(009, 'سورة التّوبَة', 10, 11);
INSERT INTO `surahs` VALUES(010, 'سورة یُونس', 11, 11);
INSERT INTO `surahs` VALUES(011, 'سورة هُود', 11, 12);
INSERT INTO `surahs` VALUES(012, 'سورة یُوسُف', 12, 13);
INSERT INTO `surahs` VALUES(013, 'سورة الرّعد', 13, 13);
INSERT INTO `surahs` VALUES(014, 'سورة إبراهیم', 13, 13);
INSERT INTO `surahs` VALUES(015, 'سورة الحِجر', 14, 14);
INSERT INTO `surahs` VALUES(016, 'سورة النّحل', 14, 14);
INSERT INTO `surahs` VALUES(017, 'سورة بنیٓ اسرآئیل / الإسرَاء', 15, 15);
INSERT INTO `surahs` VALUES(018, 'سورة الکهف', 15, 16);
INSERT INTO `surahs` VALUES(019, 'سورة مَریَم', 16, 16);
INSERT INTO `surahs` VALUES(020, 'سورة طٰه', 16, 16);
INSERT INTO `surahs` VALUES(021, 'سورة الاٴنبیَاء', 17, 17);
INSERT INTO `surahs` VALUES(022, 'سورة الحَجّ', 17, 17);
INSERT INTO `surahs` VALUES(023, 'سورة المؤمنون', 18, 18);
INSERT INTO `surahs` VALUES(024, 'سورة النُّور', 18, 18);
INSERT INTO `surahs` VALUES(025, 'سورة الفُرقان', 18, 19);
INSERT INTO `surahs` VALUES(026, 'سورة الشُّعَرَاء', 19, 19);
INSERT INTO `surahs` VALUES(027, 'سورة النَّمل', 19, 20);
INSERT INTO `surahs` VALUES(028, 'سورة القَصَص', 20, 20);
INSERT INTO `surahs` VALUES(029, 'سورة العَنکبوت', 20, 21);
INSERT INTO `surahs` VALUES(030, 'سورة الرُّوم', 21, 21);
INSERT INTO `surahs` VALUES(031, 'سورة لقمَان', 21, 21);
INSERT INTO `surahs` VALUES(032, 'سورة السَّجدَة', 21, 21);
INSERT INTO `surahs` VALUES(033, 'سورة الاٴحزَاب', 21, 22);
INSERT INTO `surahs` VALUES(034, 'سورة سَبَإ', 22, 22);
INSERT INTO `surahs` VALUES(035, 'سورة فَاطِر', 22, 22);
INSERT INTO `surahs` VALUES(036, 'سورة یسٓ', 22, 23);
INSERT INTO `surahs` VALUES(037, 'سورة الصَّافات', 23, 23);
INSERT INTO `surahs` VALUES(038, 'سورة صٓ', 23, 23);
INSERT INTO `surahs` VALUES(039, 'سورة الزُّمَر', 23, 24);
INSERT INTO `surahs` VALUES(040, 'سورة مؤمن / غَافر', 24, 24);
INSERT INTO `surahs` VALUES(041, 'سورة حٰمٓ السجدة / فُصّلَت', 24, 25);
INSERT INTO `surahs` VALUES(042, 'سورة الشّوریٰ', 25, 25);
INSERT INTO `surahs` VALUES(043, 'سورة الزّخرُف', 25, 25);
INSERT INTO `surahs` VALUES(044, 'سورة الدّخان', 25, 25);
INSERT INTO `surahs` VALUES(045, 'سورة الجَاثیَة', 25, 25);
INSERT INTO `surahs` VALUES(046, 'سورة الاٴحقاف', 26, 26);
INSERT INTO `surahs` VALUES(047, 'سورة محَمَّد', 26, 26);
INSERT INTO `surahs` VALUES(048, 'سورة الفَتْح', 26, 26);
INSERT INTO `surahs` VALUES(049, 'سورة الحُجرَات', 26, 26);
INSERT INTO `surahs` VALUES(050, 'سورة قٓ', 26, 26);
INSERT INTO `surahs` VALUES(051, 'سورة الذّاریَات', 26, 27);
INSERT INTO `surahs` VALUES(052, 'سورة الطُّور', 27, 27);
INSERT INTO `surahs` VALUES(053, 'سورة النّجْم', 27, 27);
INSERT INTO `surahs` VALUES(054, 'سورة القَمَر', 27, 27);
INSERT INTO `surahs` VALUES(055, 'سورة الرَّحمٰن', 27, 27);
INSERT INTO `surahs` VALUES(056, 'سورة الواقِعَة', 27, 27);
INSERT INTO `surahs` VALUES(057, 'سورة الحَدید', 27, 27);
INSERT INTO `surahs` VALUES(058, 'سورة المجَادلة', 28, 28);
INSERT INTO `surahs` VALUES(059, 'سورة الحَشر', 28, 28);
INSERT INTO `surahs` VALUES(060, 'سورة المُمتَحنَة', 28, 28);
INSERT INTO `surahs` VALUES(061, 'سورة الصَّف', 28, 28);
INSERT INTO `surahs` VALUES(062, 'سورة الجُمُعَة', 28, 28);
INSERT INTO `surahs` VALUES(063, 'سورة المنَافِقون', 28, 28);
INSERT INTO `surahs` VALUES(064, 'سورة التّغَابُن', 28, 28);
INSERT INTO `surahs` VALUES(065, 'سورة الطّلاَق', 28, 28);
INSERT INTO `surahs` VALUES(066, 'سورة التّحْریم', 28, 28);
INSERT INTO `surahs` VALUES(067, 'سورة المُلک', 29, 29);
INSERT INTO `surahs` VALUES(068, 'سورة القَلَم', 29, 29);
INSERT INTO `surahs` VALUES(069, 'سورة الحَاقَّة', 29, 29);
INSERT INTO `surahs` VALUES(070, 'سورة المعَارج', 29, 29);
INSERT INTO `surahs` VALUES(071, 'سورة نُوح', 29, 29);
INSERT INTO `surahs` VALUES(072, 'سورة الجنّ', 29, 29);
INSERT INTO `surahs` VALUES(073, 'سورة المُزمّل', 29, 29);
INSERT INTO `surahs` VALUES(074, 'سورة المدَّثِّر', 29, 29);
INSERT INTO `surahs` VALUES(075, 'سورة القِیَامَة', 29, 29);
INSERT INTO `surahs` VALUES(076, 'سورة دهر / الإنسَان', 29, 29);
INSERT INTO `surahs` VALUES(077, 'سورة المُرسَلات', 29, 29);
INSERT INTO `surahs` VALUES(078, 'سورة النّبَإِ', 30, 30);
INSERT INTO `surahs` VALUES(079, 'سورة النَّازعَات', 30, 30);
INSERT INTO `surahs` VALUES(080, 'سورة عَبَسَ', 30, 30);
INSERT INTO `surahs` VALUES(081, 'سورة التّکویر', 30, 30);
INSERT INTO `surahs` VALUES(082, 'سورة الانفِطار', 30, 30);
INSERT INTO `surahs` VALUES(083, 'سورة المطفّفِین', 30, 30);
INSERT INTO `surahs` VALUES(084, 'سورة الانشقاق', 30, 30);
INSERT INTO `surahs` VALUES(085, 'سورة البُرُوج', 30, 30);
INSERT INTO `surahs` VALUES(086, 'سورة الطّارق', 30, 30);
INSERT INTO `surahs` VALUES(087, 'سورة الاٴعلی', 30, 30);
INSERT INTO `surahs` VALUES(088, 'سورة الغَاشِیَة', 30, 30);
INSERT INTO `surahs` VALUES(089, 'سورة الفَجر', 30, 30);
INSERT INTO `surahs` VALUES(090, 'سورة البَلَد', 30, 30);
INSERT INTO `surahs` VALUES(091, 'سورة الشّمس', 30, 30);
INSERT INTO `surahs` VALUES(092, 'سورة اللیْل', 30, 30);
INSERT INTO `surahs` VALUES(093, 'سورة الضّحیٰ', 30, 30);
INSERT INTO `surahs` VALUES(094, 'سورة الشَّرح', 30, 30);
INSERT INTO `surahs` VALUES(095, 'سورة التِّین', 30, 30);
INSERT INTO `surahs` VALUES(096, 'سورة العَلق', 30, 30);
INSERT INTO `surahs` VALUES(097, 'سورة القَدر', 30, 30);
INSERT INTO `surahs` VALUES(098, 'سورة البَیّنَة', 30, 30);
INSERT INTO `surahs` VALUES(099, 'سورة الزّلزَلة', 30, 30);
INSERT INTO `surahs` VALUES(100, 'سورة العَادیَات', 30, 30);
INSERT INTO `surahs` VALUES(101, 'سورة القَارعَة', 30, 30);
INSERT INTO `surahs` VALUES(102, 'سورة التّکاثُر', 30, 30);
INSERT INTO `surahs` VALUES(103, 'سورة العَصر', 30, 30);
INSERT INTO `surahs` VALUES(104, 'سورة الهُمَزة', 30, 30);
INSERT INTO `surahs` VALUES(105, 'سورة الفِیل', 30, 30);
INSERT INTO `surahs` VALUES(106, 'سورة القُرَیش', 30, 30);
INSERT INTO `surahs` VALUES(107, 'سورة المَاعون', 30, 30);
INSERT INTO `surahs` VALUES(108, 'سورة الکَوثَر', 30, 30);
INSERT INTO `surahs` VALUES(109, 'سورة الکافِرون', 30, 30);
INSERT INTO `surahs` VALUES(110, 'سورة النّصر', 30, 30);
INSERT INTO `surahs` VALUES(111, 'سورة لهب / المَسَد', 30, 30);
INSERT INTO `surahs` VALUES(112, 'سورة الإخلاص', 30, 30);
INSERT INTO `surahs` VALUES(113, 'سورة الفَلَق', 30, 30);
INSERT INTO `surahs` VALUES(114, 'سورة النَّاس', 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(15) collate latin1_general_ci NOT NULL default '',
  `timestamp` varchar(15) collate latin1_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `useronline`
--

INSERT INTO `useronline` VALUES(18, '119.152.132.128', '1307079955');
INSERT INTO `useronline` VALUES(20, '119.152.132.128', '1307080056');
INSERT INTO `useronline` VALUES(19, '119.152.132.128', '1307080015');
