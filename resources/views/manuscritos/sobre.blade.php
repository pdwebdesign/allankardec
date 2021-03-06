@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                  SOBRE
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div class="center"> 
                      <h2>
                      Sobre o AllanKardec.online Museu
                      </h2>
                      <br>
                      <p>
                      Os itens que compõe o museu AllanKardec.online são raros, sendo que muitos são inéditos e
totalmente desconhecidos do Movimento Espírita Brasileiro e do Espiritismo internacional. O
acervo disponibilizado é extremamente significativo, tanto do ponto de vista acadêmico,
quanto como material de grande riqueza histórica para todos os interessados em estudar e
pesquisar o trabalho do mestre Allan Kardec e do Espiritismo.
                      </p>
                      <p>
                      O museu virtual não vai medir esforços para tornar o acervo digitalizado de forma aberta para uma ampla variedade de usuários de todo o mundo, com o intuito de conhecimento, aprendizagem, estudos, ensino e pesquisa. Vamos procurar digitalizar todo o acervo e disponibilizá-lo, gratuitamente, para o bem e divulgação do Espiritismo, sem qualquer viés político ou ideológico. 
                      </p>
                      <p>
                      Se você perguntar a algum frequentador assíduo de centro espírita, provavelmente receberá a seguinte resposta: o Espiritismo é uma doutrina revelada pelos espíritos superiores a Allan Kardec, que a codificou em cinco obras: O Livro dos Espíritos, O Livro dos Médiuns, O Evangelho Segundo o Espiritismo, O Céu e o Inferno  e A Gênese.
                      </p>
                      <p>
                        Para os estudiosos e livres pensadores do Espiritismo ele responderá que as obras do mestre Kardec são em número muito maior que isso, incluindo aí as REVISTA ESPÍRITAS - Jornal de Estudos Psicológicos, publicadas pelo mestre entre 1858 e 1869.
                      </p>
                      <p>
                      O objetivo do site é permitir que todos possam  ter acesso a documentos raros e obras, praticamente, desconhecidos da quase totalidade do mundo Espírita, colaborando assim,  para o desenvolvimento da Doutrina Espírita. Além disso, e talvez o maior objetivo, é propiciar que pesquisadores possam efetuar estudos mais profundos nos documentos apresentados e tomar conhecimento de como Allan Kardec conduziu e elaborou seus estudos para a codificação da doutrina.
                      </p>
                      <p>
                      Com certeza, esta iniciativa propiciará que a história do Espiritismo seja mais conhecida e, quem sabe, reescrita através das novas informações e conhecimentos trazidos pelos documentos do acervo apresentado.
                      </p>
                      <p>
                        Assim seja e assim será!
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
