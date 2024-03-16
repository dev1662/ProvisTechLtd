<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    img {
        max-width: 500px;
    }

    button {
        display: block;
        margin-inline: auto;
        color: #fff;
        border: 1px solid #f75949;
        border-radius: 5px;
        padding: 5px 2rem;
        background: #f75949;
        cursor: pointer;
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
    }

    button:hover {
        background-color: #50c99a !important;
        border: 1px solid #50c99a !important;
    }

    button a {
        all: unset;
    }
</style>
<div>
    <img src="{{ asset('assets/img/404.png') }}" alt="404-not-found">
    <button><a href="https://oas36ty.com/">Back To Home</a></button>
</div>
