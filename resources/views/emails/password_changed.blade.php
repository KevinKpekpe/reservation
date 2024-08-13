@component('mail::message')
# Changement de mot de passe

Cher(e) {{ Auth::user()->name }},

Votre mot de passe a été changé avec succès.

Si vous n'avez pas initié ce changement, veuillez contacter immédiatement notre équipe de support.

@component('mail::button', ['url' => config('app.url')])
Visitez notre site web
@endcomponent

Cordialement,
L'équipe de {{ config('app.name') }}
@endcomponent
