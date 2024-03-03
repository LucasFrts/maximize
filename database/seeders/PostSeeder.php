<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect([
            [
                'banner' => '/images/banner_1.png',
                'parent_header' => 1,
                'full_text' => '<p>Para sua comodidade, temos a alegria de anunciar a inauguração da mais nova unidade da Simetra! Estamos empolgados em trazer ainda mais conveniência e qualidade para você, nosso estimado cliente. A nossa busca incessante por excelência nos levou a expandir nossos horizontes, e agora estamos mais próximos do que nunca.</p>
                <p>Na Nova Unidade Simetra, você encontrará o mesmo compromisso inabalável com a satisfação do cliente que nos tornou uma referência no setor. Estamos dedicados a proporcionar uma experiência única, aliando produtos de alta qualidade a um atendimento personalizado.</p>
                <p>Seja para explorar nossos últimos lançamentos, aproveitar ofertas exclusivas ou simplesmente descobrir as últimas tendências, a Nova Unidade Simetra é o seu novo destino de referência. Além disso, contamos com uma equipe treinada e dedicada, pronta para auxiliá-lo em todas as suas necessidades.</p>
                <p>Estamos comprometidos em criar um ambiente acolhedor, onde você se sinta em casa enquanto explora as novidades em tecnologia, moda e estilo de vida. Na Nova Unidade Simetra, não estamos apenas inaugurando uma loja; estamos inaugurando uma experiência.</p>
                <p>Convidamos você a nos visitar e fazer parte dessa emocionante jornada. Seja bem-vindo à Nova Unidade Simetra, onde a excelência se encontra com a comodidade para proporcionar a você uma experiência de compra única. Esperamos ansiosamente recebê-lo em breve!</p>',
                'created_at' => now()
            ],
            [
                'banner' => '/images/banner_2.png',
                'parent_header' => 2,
                'full_text' => '<p>Com o constante desenvolvimento urbano, as construções e reformas tornaram-se uma paisagem comum em nossas cidades. Enquanto esses projetos trazem avanços para a sociedade, é crucial lembrar que não estamos sozinhos nesse ambiente em constante mudança. Nossos amigos peludos, de quatro patas, muitas vezes, são impactados por essas transformações urbanas.</p>

                <p>A presença de maquinário pesado, ruídos altos e movimentação intensa de pessoas pode causar estresse e desconforto significativos para os animais de estimação que residem nas proximidades de áreas em construção. Para garantir o bem-estar dos nossos companheiros animais, é essencial adotar medidas de precaução e cuidado durante esses períodos.</p>
                
                <p class="bold">1. Abrigos Seguros:</p>
                <p>Ao perceber a iminência de uma construção próxima, providencie um local seguro e tranquilo para seus animais de estimação. Pode ser uma área dentro de casa, longe do barulho e da agitação, onde eles possam se refugiar e se sentir protegidos.</p>
                
                <p class="bold">2. Supervisão Constante:</p>
                <p>Durante o dia, mantenha uma supervisão constante sobre seus animais. Certifique-se de que estão seguros e não expostos a áreas perigosas. Mantenha-os sob controle com guias ou cercas temporárias, evitando que se aventurem por locais potencialmente perigosos.</p>
                
                <p class="bold">3. Consultas Veterinárias:</p>
                <p>Se o seu animal de estimação demonstrar sinais de estresse, ansiedade ou desconforto durante o período de construção, é aconselhável procurar orientação veterinária. Os profissionais podem oferecer conselhos específicos e, se necessário, prescrever tratamentos para aliviar o impacto do ambiente em constante mudança.</p>
                
                <p class="bold">4. Comunicação com Construtores:</p>
                <p>Estabeleça uma comunicação aberta com os responsáveis pela construção. Informe-os sobre a presença de animais de estimação na área e discuta medidas para minimizar o impacto sobre eles. Construtores conscientes geralmente são receptivos a adaptar suas práticas para garantir a segurança dos animais.</p>
                <p>Ao adotar esses cuidados durante construções urbanas, podemos garantir que nossos amigos de quatro patas passem por esses períodos desafiadores com o mínimo de estresse possível. Priorizar o bem-estar dos animais é fundamental para construir comunidades urbanas verdadeiramente sustentáveis e amigas dos animais.</p>
                ',
                'created_at' => now()
            ],
            [
                'banner' => '/images/banner_3.png',
                'parent_header' => 3,
                'full_text' => '<p>O laboratório <strong>Simetra</strong> traz mais uma novidade para sua clínica: novos exames de bioquímica básica em até 6 horas. Ampliamos nossa estrtura para melhor atende-lo. O <strong>Simetra</strong> está em constante investimento para atender você cada vez melhor.</p><p class="pb-2">Novos exames:</p>- SÓDIO<br/>- POTÁSSIO<br/>- BILIRRUBINAS TOTAIS E FRAÇÕES<br/>- CREATININA URINÁRIA<br/>- AMILASE ',
                'created_at' => now()
            ],
            [
                'banner' => '/images/banner_1.png',
                'parent_header' => 4,
                'full_text' => '<p>Para sua comodidade, temos a alegria de anunciar a inauguração da mais nova unidade da Simetra! Estamos empolgados em trazer ainda mais conveniência e qualidade para você, nosso estimado cliente. A nossa busca incessante por excelência nos levou a expandir nossos horizontes, e agora estamos mais próximos do que nunca.</p>
                <p>Na Nova Unidade Simetra, você encontrará o mesmo compromisso inabalável com a satisfação do cliente que nos tornou uma referência no setor. Estamos dedicados a proporcionar uma experiência única, aliando produtos de alta qualidade a um atendimento personalizado.</p>
                <p>Seja para explorar nossos últimos lançamentos, aproveitar ofertas exclusivas ou simplesmente descobrir as últimas tendências, a Nova Unidade Simetra é o seu novo destino de referência. Além disso, contamos com uma equipe treinada e dedicada, pronta para auxiliá-lo em todas as suas necessidades.</p>
                <p>Estamos comprometidos em criar um ambiente acolhedor, onde você se sinta em casa enquanto explora as novidades em tecnologia, moda e estilo de vida. Na Nova Unidade Simetra, não estamos apenas inaugurando uma loja; estamos inaugurando uma experiência.</p>
                <p>Convidamos você a nos visitar e fazer parte dessa emocionante jornada. Seja bem-vindo à Nova Unidade Simetra, onde a excelência se encontra com a comodidade para proporcionar a você uma experiência de compra única. Esperamos ansiosamente recebê-lo em breve!</p>',
                'created_at' => now()
            ],
            [
                'banner' => '/images/banner_2.png',
                'parent_header' => 5,
                'full_text' => '<p>Com o constante desenvolvimento urbano, as construções e reformas tornaram-se uma paisagem comum em nossas cidades. Enquanto esses projetos trazem avanços para a sociedade, é crucial lembrar que não estamos sozinhos nesse ambiente em constante mudança. Nossos amigos peludos, de quatro patas, muitas vezes, são impactados por essas transformações urbanas.</p>

                <p>A presença de maquinário pesado, ruídos altos e movimentação intensa de pessoas pode causar estresse e desconforto significativos para os animais de estimação que residem nas proximidades de áreas em construção. Para garantir o bem-estar dos nossos companheiros animais, é essencial adotar medidas de precaução e cuidado durante esses períodos.</p>
                
                <p class="bold">1. Abrigos Seguros:</p>
                <p>Ao perceber a iminência de uma construção próxima, providencie um local seguro e tranquilo para seus animais de estimação. Pode ser uma área dentro de casa, longe do barulho e da agitação, onde eles possam se refugiar e se sentir protegidos.</p>
                
                <p class="bold">2. Supervisão Constante:</p>
                <p>Durante o dia, mantenha uma supervisão constante sobre seus animais. Certifique-se de que estão seguros e não expostos a áreas perigosas. Mantenha-os sob controle com guias ou cercas temporárias, evitando que se aventurem por locais potencialmente perigosos.</p>
                
                <p class="bold">3. Consultas Veterinárias:</p>
                <p>Se o seu animal de estimação demonstrar sinais de estresse, ansiedade ou desconforto durante o período de construção, é aconselhável procurar orientação veterinária. Os profissionais podem oferecer conselhos específicos e, se necessário, prescrever tratamentos para aliviar o impacto do ambiente em constante mudança.</p>
                
                <p class="bold">4. Comunicação com Construtores:</p>
                <p>Estabeleça uma comunicação aberta com os responsáveis pela construção. Informe-os sobre a presença de animais de estimação na área e discuta medidas para minimizar o impacto sobre eles. Construtores conscientes geralmente são receptivos a adaptar suas práticas para garantir a segurança dos animais.</p>
                <p>Ao adotar esses cuidados durante construções urbanas, podemos garantir que nossos amigos de quatro patas passem por esses períodos desafiadores com o mínimo de estresse possível. Priorizar o bem-estar dos animais é fundamental para construir comunidades urbanas verdadeiramente sustentáveis e amigas dos animais.</p>
                ',
                'created_at' => now()
            ],
            [
                'banner' => '/images/banner_3.png',
                'parent_header' => 6,
                'full_text' => '<p>O laboratório <strong>Simetra</strong> traz mais uma novidade para sua clínica: novos exames de bioquímica básica em até 6 horas. Ampliamos nossa estrtura para melhor atende-lo. O <strong>Simetra</strong> está em constante investimento para atender você cada vez melhor.</p><p class="pb-2">Novos exames:</p>- SÓDIO<br/>- POTÁSSIO<br/>- BILIRRUBINAS TOTAIS E FRAÇÕES<br/>- CREATININA URINÁRIA<br/>- AMILASE ',
                'created_at' => now()
            ],
        ]);

        $data->each(function ($item) {
            DB::table('posts')->insert($item);
        });
    }
}
