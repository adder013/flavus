@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers') }}"><span itemprop="name">Покупателям</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers/privacypolicy') }}"><span itemprop="name">Политика защиты и обработки персональных данных</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="privacypolicy-wrap">
    <h1>Политика защиты и обработки персональных данных</h1>
    <div class="policy">
        <div class="uetel-head">
            Утверждена Приказом № 3 от 13.02.2023<br>
            Генерального директора<br>
            ООО «ТД УЭТ»
        </div>
        <div class="header">Политика защиты и обработки персональных данных</div>
        <p class="name">1. Общие положения</p>
        <p>1.1. Настоящая Политика в отношении обработки персональных данных (далее – Политика) составлена в соответствии с пунктом 2 статьи 18.1 Федерального закона «О персональных данных» № 152-ФЗ от 27 июля 2006 г., а также иными нормативными правовыми актами Российской Федерации в области защиты и обработки персональных данных и действует в отношении всех персональных данных (далее – данные), которые Организация (далее – Оператор, Общество, Компания) может получить от субъекта персональных данных, являющегося стороной по гражданско-правовому договору, от пользователя сети Интернет (далее – Пользователь) во время использования им любого из сайтов, сервисов, служб, программ, продуктов или услуг ООО «Уралэнерготел», а также от субъекта персональных данных, состоящего с Оператором в отношениях, регулируемых трудовым законодательством (далее – Работник).</p>
        <p>1.2. Оператор обеспечивает защиту обрабатываемых персональных данных от несанкционированного доступа и разглашения, неправомерного использования или утраты в соответствии с требованиями Федерального закона от 27 июля 2006 г. № 152-ФЗ «О персональных данных».</p>
        <p>1.3. Оператор вправе вносить изменения в настоящую Политику. При внесении изменений в заголовке Политики указывается дата последнего обновления редакции. Новая редакция Политики вступает в силу с момента ее размещения на сайте, если иное не предусмотрено новой редакцией Политики.</p>
        <p class="name">2. Термины и принятые сокращения</p>
        <p>Персональные данные – любая информация, относящаяся к прямо или косвенно определенному, или определяемому физическому лицу (субъекту персональных данных).</p>
        <p>Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
        <p>Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники.</p>
        <p>Информационная система персональных данных (ИСПД) – совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.</p>
        <p>Персональные данные, сделанные общедоступными субъектом персональных данных, – персональные данные, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе.</p>
        <p>Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).</p>
        <p>Уничтожение персональных данных – действия, в результате которых становится невозможным восстановить содержание персональных данных в информационной системе персональных данных и (или) в результате которых уничтожаются материальные носители персональных данных.</p>
        <p>Оператор – организация, самостоятельно или совместно с другими лицами организующая обработку персональных данных, а также определяющая цели обработки персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными. Оператором является ООО «Уралэнерготел», расположенное по адресу: РФ, г. Екатеринбург, ул. Малышева 164.</p>
        <p class="name">3. Обработка персональных данных</p>
        <p>3.1. Получение персональных данных.</p>
        <p>3.1.1. Все персональные данные следует получать от самого субъекта. Если персональные данные субъекта можно получить только у третьей стороны, то субъект должен быть уведомлен об этом и от него должно быть получено согласие.</p>
        <p>3.1.2. Оператор должен сообщить субъекту о целях, предполагаемых источниках и способах получения персональных данных, характере подлежащих получению персональных данных, перечне действий с персональными данными, сроке, в течение которого действует согласие, и порядке его отзыва, а также о последствиях отказа субъекта дать письменное согласие на их получение.</p>
        <p>3.1.3. Документы, содержащие персональные данные, создаются путем:<br>
            – копирования оригиналов документов (паспорт, документ об образовании, свидетельство ИНН, пенсионное свидетельство и др.);<br>
            – внесения сведений в учетные формы;<br>
            – получения оригиналов необходимых документов (трудовая книжка, медицинское заключение, характеристика и др.).</p>
        <p>3.1.4. Использование Компанией файлов Cookies и точечных маркеров:<br>
            – Файлы Cookies дают возможность сбора следующей информации о клиенте: IP-адрес / операционная система / тип браузера / адреса ссылающихся сайтов. Это необходимо для улучшения услуг, предоставляемых клиенту компании (сохранение паролей на сайтах Компании и интернет-магазина при закрытии браузера, анализ трафика и т.д.)<br>
            – Точечные маркеры служат для графического отражения на сайте безличной информации о пользователях (счетчики посетителей / просмотров на сайте). По своему желанию клиент в любой момент может предотвратить отслеживание своих действий, отключив Cookies.</p>
        <p>3.2. Обработка персональных данных.</p>
        <p>3.2.1. Обработка персональных данных осуществляется:<br>
            – с согласия субъекта персональных данных на обработку его персональных данных;<br>
            – в случаях, когда обработка персональных данных необходима для осуществления и выполнения возложенных законодательством РФ функций, полномочий и обязанностей;<br>
            – в случаях, когда осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее – персональные данные, сделанные общедоступными субъектом персональных данных).</p>
        <p>3.2.2. Цели обработки персональных данных:<br>
            – осуществление трудовых отношений;<br>
            – осуществление гражданско-правовых отношений;<br>
            – для идентификации пользователей (посетителей) сайтов Компании и интернет-магазина, для с вязи с п ользователем, в т ом ч исле н аправление у ведомлений, з апросов и и нформации, касающихся использования сайтов и интернет-магазина, исполнения соглашений и договоров, а также обработки запросов и заявок от пользователя.<br>
            - обезличивания персональных данных для получения обезличенных статистических данных, которые передаются третьему лицу для проведения исследований, выполнения работ или оказания услуг по поручению Компании.</p>
        <p>3.2.3. Категории субъектов персональных данных.<br>
            Обрабатываются персональные данные следующих субъектов персональных данных:<br>
            – физические лица, состоящие с Обществом в трудовых отношениях;<br>
            – физические лица, уволившиеся из Общества;<br>
            – физические лица, являющиеся кандидатами на работу;<br>
            – физические лица, состоящие с Обществом в гражданско-правовых отношениях;<br>
            – физические лица, являющиеся пользователями сайтов Компании и интернет-магазина.</p>
        <p>3.2.4. Персональные данные, обрабатываемые Оператором:<br>
            – данные, полученные при осуществлении трудовых отношений;<br>
            – данные, полученные для осуществления отбора кандидатов на работу;<br>
            – данные, полученные при осуществлении гражданско-правовых отношений;<br>
            – данные, полученные от пользователей сайтов Компании и интернет-магазина.</p>
        <p>3.2.5. Обработка персональных данных ведется:<br>
            – с использованием средств автоматизации;<br>
            – без использования средств автоматизации</p>
        <p>3.3. Хранение персональных данных.</p>
        <p>3.3.1. Персональные данные субъектов могут быть получены, проходить дальнейшую обработку и передаваться на хранение как на бумажных носителях, так и в электронном виде.</p>
        <p>3.3.2. Персональные данные, зафиксированные на бумажных носителях, хранятся в запираемых шкафах либо в запираемых помещениях с ограниченным правом доступа.</p>
        <p>3.3.3. Персональные данные субъектов, обрабатываемые с использованием средств автоматизации в разных целях, хранятся в разных папках.</p>
        <p>3.3.4. Не допускается хранение и размещение документов, содержащих, в открытых электронных каталогах (файлообменниках) в ИСПД.</p>
        <p>3.3.5. Хранение персональных данных в форме, позволяющей определить субъекта персональных данных, осуществляется не дольше, чем этого требуют цели их обработки, и они подлежат уничтожению по достижении целей обработки или в случае утраты необходимости в их достижении.</p>
        <p>3.4. Уничтожение персональных данных.</p>
        <p>3.4.1. Уничтожение документов (носителей), содержащих персональные данные, производится путем дробления (измельчения), химического разложения, превращения в бесформенную массу или порошок. Для уничтожения бумажных документов допускается применение шредера.</p>
        <p>3.4.2. Персональные данные на электронных носителях уничтожаются путем стирания или форматирования носителя.</p>
        <p>3.4.3. Факт уничтожения персональных данных подтверждается документально актом об уничтожении носителей.</p>
        <p>3.5. Передача персональных данных.</p>
        <p>3.5.1. Оператор передает персональные данные третьим лицам в следующих случаях:<br>
            – субъект выразил свое согласие на такие действия;<br>
            – передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.</p>
        <p>3.5.2. Перечень лиц, которым передаются персональные данные.<br>
            – Пенсионный фонд РФ для учета (на законных основаниях);<br>
            – налоговые органы РФ (на законных основаниях);<br>
            – Фонд социального страхования РФ (на законных основаниях);<br>
            – территориальный фонд обязательного медицинского страхования (на законных основаниях);<br>
            – страховые медицинские организации по обязательному и добровольному медицинскому страхованию (на законных основаниях);<br>
            – банки для начисления заработной платы (на основании договора);<br>
            – органы МВД России в случаях, установленных законодательством;<br>
            – обезличенные персональные данные Пользователей сайта интернет-магазина передаются контрагентам Компании.</p>
        <p class="name">4. Защита персональных данных</p>
        <p>4.1. В соответствии с требованиями нормативных документов Оператором создана система защиты персональных данных (СЗПД), состоящая из подсистем правовой, организационной и технической защиты.</p>
        <p>4.2. Подсистема правовой защиты представляет собой комплекс правовых, организационно-распорядительных и нормативных документов, обеспечивающих создание, функционирование и совершенствование СЗПД.</p>
        <p>4.3. Подсистема организационной защиты включает в себя организацию структуры управления СЗПД, разрешительной системы, защиты информации при работе с сотрудниками, партнерами и сторонними лицами.</p>
        <p>4.4.1 Подсистема технической защиты включает в себя комплекс технических, программных, программно-аппаратных средств, обеспечивающих защиту персональных данных.</p>
        <p>4.4.2 Основными мерами защиты персональных данных, используемыми Оператором, являются:</p>
        <p>4.5.1. Назначение лица, ответственного за обработку персональных данных, которое осуществляет организацию обработки персональных данных, обучение и инструктаж, внутренний контроль за соблюдением учреждением и его работниками требований к защите персональных данных.</p>
        <p>4.5.2. Определение актуальных угроз безопасности персональных данных при их обработке в ИСПД и разработка мер и мероприятий по защите персональных данных.</p>
        <p>4.5.3. Разработка политики в отношении обработки персональных данных.</p>
        <p>4.5.4. Установление правил доступа к персональным данным, обрабатываемым в ИСПД, а также обеспечение регистрации и учета всех действий, совершаемых с персональными данными в ИСПД.</p>
        <p>4.5.5. Установление индивидуальных паролей доступа сотрудников в информационную систему в соответствии с их производственными обязанностями.</p>
        <p>4.5.6. Применение прошедших в установленном порядке процедуру оценки соответствия средств защиты информации.</p>
        <p>4.5.7. Сертифицированное антивирусное программное обеспечение с регулярно обновляемыми базами.</p>
        <p>4.5.8. Соблюдение условий, обеспечивающих сохранность персональных данных и исключающих несанкционированный к ним доступ.</p>
        <p>4.5.9. Обнаружение фактов несанкционированного доступа к персональным данным и принятие мер.</p>
        <p>4.5.10. Восстановление персональных данных, модифицированных или уничтоженных вследствие несанкционированного доступа к ним.</p>
        <p>4.5.11. Обучение работников Оператора, непосредственно осуществляющих обработку персональных данных, положениям законодательства РФ о персональных данных, в том числе требованиям к защите персональных данных, документам, определяющим политику Оператора в отношении обработки персональных данных, локальным актам по вопросам обработки персональных данных.</p>
        <p>4.5.12. Осуществление внутреннего контроля и аудита.</p>
        <p class="name">5. Основные права субъекта персональных данных и обязанности Оператора</p>
        <p>5.1. Основные права субъекта персональных данных.<br>
            Субъект имеет право на доступ к его персональным данным и следующим сведениям:<br>
            – подтверждение факта обработки персональных данных Оператором;<br>
            – правовые основания и цели обработки персональных данных;<br>
            – цели и применяемые Оператором способы обработки персональных данных;<br>
            – наименование и место нахождения Оператора, сведения о лицах (за исключением работников Оператора), которые имеют доступ к персональным данным или которым могут быть раскрыты персональные данные на основании договора с Оператором или на основании федерального закона;<br>
            – сроки обработки персональных данных, в том числе сроки их хранения;<br>
            – порядок осуществления субъектом персональных данных прав, предусмотренных Федеральным законом;<br>
            – наименование или фамилия, имя, отчество и адрес лица, осуществляющего обработку персональных данных по поручению Оператора, если обработка поручена или будет поручена такому лицу;<br>
            – обращение к Оператору и направление ему запросов;<br>
            – обжалование действий или бездействия Оператора.</p>
        <p>5.2. Обязанности Оператора.<br>
            Оператор обязан:<br>
            – при сборе персональных данных предоставить информацию об обработке персональных данных;<br>
            – в случаях если персональные данные были получены не от субъекта персональных данных, уведомить субъекта;<br>
            – при отказе в предоставлении персональных данных субъекту разъясняются последствия такого отказа;<br>
            – опубликовать или иным образом обеспечить неограниченный доступ к документу, определяющему его политику в отношении обработки персональных данных, к сведениям о реализуемых требованиях к защите персональных данных;<br>
            – принимать необходимые правовые, организационные и технические меры или обеспечивать их принятие для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных;<br>
            – давать ответы на запросы и обращения субъектов персональных данных, их представителей и уполномоченного органа по защите прав субъектов персональных данных.</p>
    </div>
</div>
@endsection
