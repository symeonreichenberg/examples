var app = document.getElementById('quote');
var typewriter = new Typewriter(app, {loop: true, delay: 75,});
typewriter
.pauseFor(500)
.typeString('Pro člověka je docela přirozené obávat se smr')
.pauseFor(600).deleteChars(3).typeString('konce.')
.pauseFor(400).typeString(' Ale dokud jsem tu já, dýchající <span class="non">a na</span> nohou, budu stát mezi lidstvem a smrtí. ')
.pauseFor(600).typeString('Nikdy jí neuhnu <span class="non">z cesty</span>.')
.pauseFor(300).typeString('<br/><br/>Jekatěrina Kirillovna Pečkova')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Hlavním úkolem dokumentátora je především stát dost daleko')
.pauseFor(500).deleteChars(6).typeString('blízko, aby mohl všechno zaznamenat, ale zároveň dost daleko, aby mohl zprávu')
.pauseFor(700).typeString(' předat lidstvu. Asi tušíte, že je občas dost složité to vyvážit, ale to máte tak - když máte špatné záběry, můžete se později pokusit')
.pauseFor(700).typeString(' <span class="non">o lepší</span>. Když jste mrtví, už to spíš nespravíte.')
.pauseFor(300).typeString('<br/><br/>Elvira P. Prince')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Jasné, jeden dělá, co umí. ')
.pauseFor(900).typeString('Jak by to taky mělo být jinak? Jsou hrdinové, jsou vůdci, ')
.pauseFor(600).typeString('jsou vědci <span class="non">a pak</span> jsou ti ostatní. Ale jestli chcete slyšet můj názor, hrdinové jsou')
.pauseFor(600).deleteChars(4).typeString('to mají nejhorší. Vždycky umírají jako první.')
.pauseFor(300).typeString('<br/><br/>Ivan Josifovič Petriashvili')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Víte, co vás nejlépe ochrání před smrtí podchlazením nebo vyčerpáním? ')
.pauseFor(600).typeString('Zimmerovo špičkové vybavení!')
.pauseFor(400).typeString(' Vážně, nenechte se zlákat podvodnými rádobyodborníky, za ty omrzliny to nestojí. <span class="non">A navíc</span> - při koupi kompletní výstroje dostanete <span class="non">i slevu</span> na další nákup!')
.pauseFor(300).typeString('<br/><br/>Samuel T. Zimmer')
.pauseFor(2500).deleteAll()
.start();