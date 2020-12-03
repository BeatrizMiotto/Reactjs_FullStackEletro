import React from 'react';
import './style.css';

function Contatos(){
    return(
        <div>
            <header>
                <h2>Contatos</h2>
                <hr/>
            </header>
            <section>
                <p><img src="./imagens/email imagem.png" class="img"></img><br/>contato@fullstackeletro.com</p>
                <p><img src="./imagens/whats.png" class="img"></img><br/>(11) 99999-9999</p>
                <p><img src="./imagens/insta.jpg" class="img"></img><br/>@fullstackeletro</p>
            </section>
            <form class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" name="nome"  placeholder="Nome"/>
                <label for="msg">Mensagem:</label>                    
                <input class="form-control" id="msg" type="text" name="msg" placeholder="Escreva sua mensagem"/><br/>
                <button type="submit" name="submit" value="Enviar">Enviar</button>
            </form>
        </div>
    );
};
export default Contatos;