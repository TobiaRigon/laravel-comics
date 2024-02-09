<footer>

    <section id="top_section">
        <div class="top_container">
            <a class="cell" href="#">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics icon">
                <span>digital comics</span>
            </a>
            <a class="cell" href="#">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="digital comics icon">
                <span>dc merchandise</span>
            </a>
            <a class="cell" href="#">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="digital comics icon">
                <span>subscription</span>
            </a>
            <a class="cell" href="#">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="digital comics icon">
                <span>comic shop locator</span>
            </a>
            <a class="cell" href="#">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="digital comics icon">
                <span>dc power visa</span>
            </a>
        </div>
    </section>

    <section id="mid_section">
        <div class="container">
        </div>
    </section>

    <section id="bottom_section">
        <div class="container">
        </div>
    </section>

</footer>

<style scoped lang="scss">

footer{
    background-color: #0282f9
    ;
}

    #top_section {
        background-color: #0282f9;
        min-height: 30px;

        .top_container {
            max-width: 80%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin:0 auto;

            .cell {
                display: flex;
                align-items: center;
                background-color: #0282f9;

                img {
                    padding: 30px 0;
                    max-height: 150px;
                    max-width: 90px;
                }

                span {
                    padding-left: 10px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 600;

                }
            }
        }


    }
    </style>
