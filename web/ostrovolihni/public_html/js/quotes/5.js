var app = document.getElementById('quote');
var typewriter = new Typewriter(app, {loop: true, delay: 75,});
typewriter
.pauseFor(500)
.typeString('Nenamlouvejme si, že jsou úmrtí, na kterých záleží více')
.pauseFor(500).deleteChars(4)
.typeString('méně než na jiných. Vždyť když nic jiného, všichni po sobě zanecháváme své milované, vzpomínky, strasti <span class="non">i naděje.</span> ')
.pauseFor(1500).typeString('Všichni jsme se narodili nevinní. Smrt byť jediného člověka je tragédií, proti které bychom nikdy neměli přestat bojovat.')
.pauseFor(300).typeString('<br/><br/>Robert S. Carter')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Práce! Vlast! Lid! Co chcete slyšet víc? ')
.pauseFor(1500).typeString('Náš vlastní život je bezvýznamný, jenom ozubené kolečko <span class="non">v sou</span>kolí')
.pauseFor(200).deleteChars(4).pauseFor(200).typeString('strojí budování dokonalého společenství.')
.pauseFor(300).typeString('<br/><br/>Dimitrij Evgeniovič Fanin')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Řeči o smrtelnosti, to je ')
.pauseFor(1500).typeString('dojemné, ale proč se mě nezeptáte na můj výzkum?')
.pauseFor(300).typeString('<br/><br/>Johannes Rossmann')
.pauseFor(2500).deleteAll()
.pauseFor(1500)
.typeString('Život, to je především láska. Pokud nemáte pro koho žít, není vaše existence příliš odlišná od smrti. ')
.pauseFor(1500).typeString('Jen přežíváte, dokud neztrouchniví <span class="non">i</span> vaše maso <span class="non">a vy</span> konečně neumřete.')
.pauseFor(300).typeString('<br/><br/>Raisa Stepanovna Starceva')
.pauseFor(2500).deleteAll()
.start();