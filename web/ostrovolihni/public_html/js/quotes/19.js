var app = document.getElementById('quote');
var typewriter = new Typewriter(app, {loop: true, delay: 75,});
typewriter
.pauseFor(500)
.typeString('Lidské bytí! Pochodeň čekající na onu příslovečnou jiskru,')
.pauseFor(800).typeString(' která ji rozžehne ve spalující plamen <span class="non">a osvětlí</span>')
.pauseFor(400).typeString(' tmu, kterou tápou naše nevidomé schránky. Blesk')
.pauseFor(500).deleteChars(5).typeString('Hrom, který čeká na blesk, který uvede jeho hřmění <span class="non">v život!</span> Nebo…')
.pauseFor(800).typeString(' nebo tak nějak bych to přinejmenším napsal do novin. ')
.pauseFor(400).typeString('<span class="non">I když</span> pravda už se <span class="non">v dnešní</span> době příliš nenosí.')
.pauseFor(300).typeString('<br/><br/>Dante E. Soiu')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Když člověk prochází polární pustinou, vše je najednou ')
.pauseFor(800).typeString('jednodušší <span class="non">a jasnější.</span> Vše, na čem záleží, je dobrá příprava na začátku <span class="non">a pak</span> jen každý jeden další krok,')
.pauseFor(500).typeString(' který děláte. Když se tohoto držíte, je velká šance, že neum')
.pauseFor(900).deleteChars(4).typeString('se vám smrt vyhne <span class="non">a vy</span> se <span class="non">v pořádku</span> vrátíte do civilizace. <span class="non">I když</span> tam na vás vůbec nic nečeká ')
.pauseFor(400).typeString('<span class="non">a možná</span> by bylo lepší zůstat <span class="non">v pustině</span> už navždy.')
.pauseFor(300).typeString('<br/><br/>Konstantin Leonič Zajcev')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Je skutečně zajímavé, jak různé společnosti vnímají téma smrti <span class="non">a umírání.</span>')
.pauseFor(800).typeString(' Je zřejmě lidskou přirozeností se skonu obávat, ale některé domorodé kmeny se tomu všemu dokázaly postavit čelem překvapivě mnohem lépe než naše ')
.pauseFor(900).typeString('kultura. Myslím, že právě <span class="non">u těchto</span> primitivů můj muž získal sílu žít plný život až do konce.')
.pauseFor(700).typeString(' Kéž bych to jednoho dne dokázala také.')
.pauseFor(300).typeString('<br/><br/>Victoria Winifred Blackman')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Vás nefascinuje lidský život?')
.pauseFor(800).typeString(' Tak malý <span class="non">v měřítku</span> všehomíra <span class="non">a přitom</span> tak působivý! <span class="non">A nejen</span> život, ale <span class="non">i skon.</span>')
.pauseFor(700).typeString(' Ano, mnoho umělců se ho už pokusilo zachytit přede mnou. Já ale nebudu opakovat jejich chyby.')
.pauseFor(500).typeString(' Oni se ve svém pomýlení zaměřovali na dekadentní boháče či naopak vyvrhely na okraji lidské společnosti. V mém')
.pauseFor(400).deleteChars(3).pauseFor(300).typeString('ohnisku mého díla musí stanout člověk blízký našim srdcím - člověk pracující.')
.pauseFor(300).typeString('<br/><br/>Alexandra Bogdanovna Karenska')
.pauseFor(2500).deleteAll()
.start();