<p>По вашему запросу сформирована ссылка для авторизации в системе управления сайтом «ДАММИ».</p>
<p>Перейдите по адресу: <a href="{{ config('app.url') }}/auth?type={{ $user->auth_type }}&code={{ base64_encode($user->link_hash) }}">{{ config('app.url') }}/auth</a>, чтобы войти в систему управления.</p>
<p>&nbsp;</p>
<p>Обращаем ваше внимание на то, что ссылка действительна в течение трех минут после отправки этого сообщения.</p>

