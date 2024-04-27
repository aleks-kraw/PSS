{if $msgs->isError()}
    <div>
        <h4 class="info_text">Wystąpiły błędy: </h4>
        <ol class="err">
            {foreach  $msgs->getErrors() as $err}
                {strip}
                    <li>{$err}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
{/if}
{if $msgs->isInfo()}
    <div>
        <h4 class="info_text">Informacje: </h4>
        <ol class="inf">
            {foreach $msgs->getInfos() as $inf}
                {strip}
                    <li>{$inf}</li>
                {/strip}
            {/foreach}
        </ol>
    </div>
{/if}