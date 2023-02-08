INSERT INTO questions (id, content, image, supplement) values 
(1, '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？', 'img-quiz01.png', '経済産業省 2019年3月 － IT 人材需給に関する調査'),
(2, '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？', 'img-quiz02.png', null),
(3, 'IoTとは何の略でしょう？', 'img-quiz03.png', null),
(4, 'イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？', 'img-quiz04.png', 'Society5.0 - 科学技術政策 - 内閣府'),
(5, 'イギリスのコンピューター科学者であるギャビン・ウッド氏が提唱した、ブロックチェーン技術を活用した「次世代分散型インターネット」のことをなんと言うでしょう？', 'img-quiz05.png', null),
(6, '先進テクノロジー活用企業と出遅れた企業の収益性の差はどれくらいあると言われているでしょうか？', 'img-quiz06.png', 'Accenture Technology Vision 2021');

INSERT INTO choices (question_id, name, valid) values
(1, '約28万人', false), (1, '約79万人', true), (1, '約183万人', false),
(2, 'INTECH', false), (2, 'BIZZTECH', false), (2, 'X-TECH', true),
(3, 'Internet of Things', true), (3, 'Integrate into Technology', false), (3, 'Information on Tool', false),
(4, 'Society 5.0', true), (4, 'CyPhy', false), (4, 'SDGs', false), 
(5, 'Web3.0', true), (5, 'NFT', false), (5, 'メタバース', false), 
(6, '約2倍', false), (6, '約5倍', true), (6, '約11倍', false);