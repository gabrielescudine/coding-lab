import "./Rodape.css";

const Rodape = () => {
    return (
        <footer className="rodape">
            <div className="container">
                <section className="redeSocial">
                    <ul>
                        <li><a href="https://www.google.com" title="Rede Social"><img src="/images/fb.png" title="Rede Social Facebook" alt="Ícone Rede Social" /></a></li>
                        <li><a href="https://www.google.com" title="Rede Social"><img src="/images/tw.png" title="Rede Social Twitter" alt="Ícone Rede Social" /></a></li>
                        <li><a href="https://www.google.com" title="Rede Social"><img src="/images/ig.png" title="Rede Social Instagram" alt="Ícone Rede Social" /></a></li>
                    </ul>
                </section>

                <section className="logo">
                    <img src="/images/logo.png" alt="Logo do Site" />
                </section>

                <section className="sobre">
                    <p>Desenvolvido por Gabriel Escudine.</p>
                </section>
            </div>
        </footer>
    )
}

export default Rodape;