{extends file="home.tpl"}






{block name=content}
   <!-- form section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Kalkulator Kredytowy</h1>
                  <form action="{$conf->action_root}calc_kred" method="post">
                     <div class="mail_section_1">
                        <label for="id_kwota">Kwota: </label>
                        <input class="mail_text" id="id_kwota" type="text" name="kwota" value="{$form->k}"> <br />
                        <label for="id_lata">Na ile lat: </label>
                        <input class="mail_text" id="id_lata" type="text" name="lata" value="{$form->l}" /><br />
                        <label for="id_procent">Oprocentowanie: </label>
                        <input class="mail_text" id="id_procent" type="text" name="procent" value="{$form->p}" /><br />
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

   {include file='messages.tpl'}

   <div class="footer_section">
      {if isset($res->wynik)}
         <div>
            <h4 class="info_text"> Wynik</h4>
            <p class="res" style="">
               {{$res->wynik}|string_format:"%.2f"}
            </p>
         </div>
      {/if}
   </div>




{/block}


{block name=footer}{/block}