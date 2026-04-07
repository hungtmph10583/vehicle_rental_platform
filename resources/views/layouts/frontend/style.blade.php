<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
    }

    html,
    body {
        height: 100vh;
    }

    body {
        line-height: 1.5;
        -webkit-font-smoothing: antialiased;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    img,
    picture,
    video,
    canvas,
    svg {
        display: block;
        max-width: 100%;
    }

    input,
    button,
    textarea,
    select {
        font: inherit;
        outline: none;
        border: none;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        overflow-wrap: break-word;
    }

    a {
        text-decoration: none;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-color: transparent;
        /* background-image: linear-gradient(180deg, #F2B6F3 0%, #FF1A1A 100%); */
        /* background: linear-gradient(89.86deg, #5940f1 8.6%, #ce00ff 99.86%); */
        background-color: rgb(245 245 245/1);
    }

    /* Button Scroll */

    #scrollToTopButton {
        position: fixed;
        bottom: 70px;
        right: 20px;
        padding: 10px 15px;
        font-size: 16px;
        background-color: #514b82;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: none;
        z-index: 15;
    }

    #scrollToTopButton:hover {
        background-color: #423C6F;
    }

    /* ----------------- */

    .container {
        max-width: 970px;
        margin: 4.5em auto 0;
        padding: 0 1rem 10rem;
    }

    .title {
        padding: 1em 0 0.5em;
        padding-bottom: 0.5em;
        margin: 0;
        font-style: normal;
        font-size: 2em;
        text-align: center;
        color: #020817;
    }

    /* container__top */

    .container__top {
        /* background-color: #514b82; */
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0.5rem;
    }

    .container__top--total_result>p {
        color: #514b82;
        font-size: 1.2rem;
        font-weight: 500;
    }

    .container__top--orderBy>select {
        appearance: none;
        width: 100%;
        padding: 0.675em 2.5em 0.675em 1em;
        background-color: #fff;
        border: 1px solid #caced1;
        border-radius: 0.25rem;
        color: #000;
        cursor: pointer;
    }

    /* Search Form */

    .search-form {
        position: relative;
        display: block;
        margin: 2rem 0 3rem;
    }

    .search-form__input {
        width: 100%;
        height: 64px;
        border-radius: 6px;
        box-shadow: 0 26.2731px 38.3588px -12.6111px rgba(37, 46, 105, .3);
        box-sizing: border-box;
        font-size: 20px;
        line-height: 64px;
        padding: 0 10px 0 15px;
        background: rgba(255, 255, 255, .8);
        backdrop-filter: blur(9.48952px);
    }

    .is-invalid {
        border: 1px solid #dc3741;
    }

    input,
    input::placeholder {
        color: rgba(0, 0, 0, 0.5);
        font: 1.25rem/3 sans-serif;
    }

    .search-form__button {
        position: absolute;
        right: 5px;
        top: 4px;
        height: 56px;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
        border-radius: 8px;
        font-style: normal;
        font-size: 18px;
        line-height: 130%;
        text-align: center;
        color: #fff;
        padding: 1em 1.5em;
        margin: 0 !important;
        border: 0;
        cursor: pointer;
    }

    .search-form__button:active,
    .search-form__button:hover {
        outline: 0;
        opacity: .85;
    }

    /* Item */
    .container--result_response_search {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto;
        gap: 10px;
        justify-content: space-between;
    }

    .item {
        position: relative;
        overflow: hidden;
        border-radius: 6px;
        padding: 1rem;
        background: rgba(255, 255, 255, .2);
    }

    .item:hover {
        box-shadow: 0 26.2731px 38.3588px -12.6111px rgba(37, 46, 105, .3);
    }

    .item:hover .item_bg {
        -webkit-transform: scale(10);
        -ms-transform: scale(10);
        transform: scale(10);
    }

    .item_bg {
        height: 128px;
        width: 128px;
        /* background: linear-gradient(89.86deg, #ce00ff 99.86%, #5940f1 8.6%); */
        background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        z-index: 1;
        position: absolute;
        top: -75px;
        right: -75px;
        border-radius: 50%;
        -webkit-transition: all .5s ease;
        -o-transition: all .5s ease;
        transition: all .5s ease;
    }

    .item__link {
        display: flex;
        justify-content: center;
        flex-direction: column;
        /* align-items: center; */
        z-index: 10;
    }

    .item__image {
        width: 100%;
        z-index: 10;
    }

    .item__code {
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 0.5rem 1rem;
        background: #514b82;
        color: #fff;
        border-radius: 6px;
        font-weight: 600;
        z-index: 10;
    }

    .item__name {
        color: #020817;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        z-index: 10;
    }

    .item__price {
        color: #020817;
        font-size: 1.8rem;
        font-weight: 700;
        z-index: 10;
    }

    /* loading */

    .loading {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100vh;
        z-index: 100;
        background: rgba(255, 255, 255, .8);
        /* display: flex;
            justify-content: center; */
    }

    .spinner-5 {
        width: 50px;
        --b: 8px;
        /* the border thickness */
        aspect-ratio: 1;
        border-radius: 50%;
        background: #514b82;
        -webkit-mask:
            repeating-conic-gradient(#0000 0deg, #000 1deg 70deg, #0000 71deg 90deg),
            radial-gradient(farthest-side, #0000 calc(100% - var(--b) - 1px), #000 calc(100% - var(--b)));
        -webkit-mask-composite: destination-in;
        mask-composite: intersect;
        animation: s5 1s infinite;
    }

    @keyframes s5 {
        to {
            transform: rotate(.5turn)
        }
    }

    @media (max-width: 768px) {
        .title {
            font-size: 1.2rem;
            padding-bottom: 0em !important;
        }

        .search-form__button {
            position: relative !important;
            top: auto;
            right: auto;
            width: 100%;
            margin-top: 10px !important;
            background: linear-gradient(89.86deg, #ce00ff 8.6%, #5940f1 99.86%);
            box-shadow: 0 18px 40px -16px rgba(89, 64, 241, .8);
        }

        .container--result_response_search {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 390px) {
        .container--result_response_search {
            grid-template-columns: 1fr;
        }
    }
</style>