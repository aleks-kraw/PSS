{extends file="./templates/home.tpl"}

{block name=footer}{/block}





{block name=content}
   <!-- form section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Kalkulator Kredytowy</h1>
                  <form action="{$app_url}/app/calc.php" method="post">
                     <div class="mail_section_1">
                        <label for="id_kwota">Kwota: </label>
                        <input class="mail_text" id="id_kwota" type="text" name="kwota" value="{$form['k']}"> <br />
                        <label for="id_lata">Na ile lat: </label>
                        <input class="mail_text" id="id_lata" type="text" name="lata" value="{$form['l']}" /><br />
                        <label for="id_procent">Oprocentowanie: </label>
                        <input class="mail_text" id="id_procent" type="text" name="procent" value="{$form['p']}" /><br />
                        <div class="send_bt">
                           <input type="submit" value="Oblicz" />
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   </div>


   <!-- form section end -->

   {* wyświeltenie listy błędów, jeśli istnieją *}
   {if isset($messages)}
      {if count($messages) > 0}
         <h4 class="info_text">Wystąpiły błędy: </h4>
         <ol class="err">
            {foreach  $messages as $msg}
               {strip}
                  <li>{$msg}</li>
               {/strip}
            {/foreach}
         </ol>
      {/if}
   {/if}

   {* wyświeltenie listy informacji, jeśli istnieją *}
   {if isset($infos)}
      {if count($infos) > 0}
         <h4 class="info_text">Informacje: </h4>
         <ol class="inf">
            {foreach  $infos as $msg}
               {strip}
                  <li>{$msg}</li>
               {/strip}
            {/foreach}
         </ol>
      {/if}
   {/if}

   <div class="footer_section">
      {if isset($wynik)}
         <div>
            <h4 class="info_text"> Wynik</h4>
            <p class="res" style="">
               {$wynik|string_format:"%.2f"}
            </p>
         {/if}
      </div>



   </div>
{/block}