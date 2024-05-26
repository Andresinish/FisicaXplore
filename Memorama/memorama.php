
	
	<section class="s-pageheader pageheader">
        <div class="row">
            <div class="column xl-12">
                <h1 class="page-title">
                    <span class="page-title__small-type text-pretitle"> Memorama de campo electrico </span>
                    Juego FisicaXplora
                </h1>                            
            </div>
        </div>
	</section> <!--pageheader --> 
	
	<div class = "TituloMemorama">
		<p> Memorama </p>
	</div>
	
	<center>
		<div class="s-header__contact" style="padding-top: 50px">
			<div id="attempts" style="display: inline-block; margin-right: 20px; font-size: 20px;">Intentos: 0</div>
			<i class="fa-solid fa-clock" style="margin:5px"> </i><div id="timer" style="display: inline-block; margin-right: 20px; font-size: 20px;"> 00:00</div>
			<a href="" http-equiv="refresh" content="5" class="btn btn--primary s-header__contact-btn">Reiniciar</a>                        
		</div> <!-- s-header__contact -->
	</center>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div id="game-board" class="grid-container"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
        let cardM = [];
        let flippedCards = [];
        let matchedCards = 0;
        let attempts = 0;
        let timerInterval;
        let seconds = 0;

        const urlParams = new URLSearchParams(window.location.search);
        const IDTema = urlParams.get('IDTema');

        if (IDTema) {
            fetch(`Memorama/getCards.php?IDTema=${IDTema}`)
                .then(response => response.json())
                .then(data => {
                    cardM = data;
                    startGame();
                    startTimer();
                });
        }

        function startGame() {
            const gameBoard = document.getElementById('game-board');
            const pairedCards = [];

            cardM.forEach(card => {
                pairedCards.push({
                    type: 'image',
                    id: card.IDCarta,
                    content: `<img src="images/Memorama/${card.Imagen}"><strong>${card.Palabra}</strong>`
                });
                pairedCards.push({
                    type: 'definition',
                    id: card.IDCarta,
                    content: `<strong>${card.Palabra}</strong><p>${card.Definicion}</p>`
                });
            });

            shuffle(pairedCards);

            pairedCards.forEach(card => {
                const cardElement = document.createElement('div');
                cardElement.classList.add('cardM');
                cardElement.dataset.id = card.id;

                const frontElement = document.createElement('div');
                frontElement.classList.add('front');

                const backElement = document.createElement('div');
                backElement.classList.add('back');
                backElement.innerHTML = card.content;

                cardElement.appendChild(frontElement);
                cardElement.appendChild(backElement);

                cardElement.addEventListener('click', flipCard);
                gameBoard.appendChild(cardElement);
            });
        }

        function flipCard() {
            if (flippedCards.length < 2 && !this.classList.contains('flipped')) {
                this.classList.add('flipped');
                flippedCards.push(this);

                // Incrementar el contador de intentos
                attempts++;
                document.getElementById('attempts').textContent = `Intentos: ${attempts}`;

                if (flippedCards.length === 2) {
                    setTimeout(checkMatch, 1000);
                }
            }
        }

        function checkMatch() {
            const [card1, card2] = flippedCards;
            if (card1.dataset.id === card2.dataset.id && card1 !== card2) {
                matchedCards += 2;
                if (matchedCards === cardM.length * 2) {
                    setTimeout(() => {
                        document.getElementById('MesajeGana').style.display = "block";
                        stopTimer();
                    }, 100);
                }
            } else {
                card1.classList.remove('flipped');
                card2.classList.remove('flipped');
            }
            flippedCards = [];
        }

        function shuffle(array) {
            for (let index = array.length - 1; index > 0; index--) {
                const randomIndex = Math.floor(Math.random() * (index + 1));
                [array[index], array[randomIndex]] = [array[randomIndex], array[index]];
            }
            return array;
        }

        function startTimer() {
            timerInterval = setInterval(() => {
                seconds++;
                const mins = Math.floor(seconds / 60);
                const secs = seconds % 60;
                document.getElementById('timer').textContent = 
                    `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timerInterval);
        }
    });
</script>

<div id = "MesajeGana">
	<p> !!Haz ganado¡¡ </p>
</div>