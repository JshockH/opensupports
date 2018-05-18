<?php
class MailTexts {
  public static function getTexts() {
    return [
        'en' => [
          'USER_SIGNUP' => [
              'Signup {{to}} - OpenSupports',
              'Verify your account',
              'Welcome to our support center, {{name}}!. We need you to verify this email in order to get access to your account.',
              'Use this code in {{url}}/verify-token/{{to}}/{{verificationToken}} or click the button below.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Password edited - OpenSupports',
              'Password changed',
              'Hi, {{name}}. We want to inform you that your password has changed from your customer panel.'
          ],
          'USER_EMAIL' => [
              'Email edited - OpenSupports',
              'Email changed',
              'Hi, {{name}}. We want to inform you that your email has changed to {{newemail}} from your customer panel.'
          ],
          'PASSWORD_FORGOT' => [
              'Recover password - OpenSupports',
              'Recover password',
              'Hi, {{name}}. You have requested to recover your password.',
              'Use this code in {{url}}/recover-password?email={{to}}&token={{token}} or click the button below.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Access system changed - OpenSupports',
              'Access system changed',
              'Hello, {{name}}. The system to access tickets has changed.',
              'You can access and see to your tickets by using your email and the ticket number.Click in the button below to see your tickets.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account created - OpenSupports',
              'Account created',
              'Hello, {{name}}. We have created an account where you can access the tickets you have sent us.',
              'You can access your account by using this email <i>({{to}})</i> and password below.Please change the password as soon as you log in.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket created - OpenSupports',
              'Ticket created',
              'Hello, {{name}}. You have sent a new ticket titled <i>{{title}}</i> to our support center.',
              'You can access to the ticket by its ticket number or you can click on the button below.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} New response - OpenSupports',
              'Ticket responded',
              'Hello, {{name}}. You have received a response in the ticket titled <i>{{title}}</i>.',
              'Please click below to see the new response.'
          ],
          'TICKET_CLOSED' => [
             '#{{ticketNumber}} Ticket closed - OpenSupports',
              'Ticket closed',
              'Hello, {{name}}. A ticket you sent titled <i>{{title}}</i> has been closed.',
              'You can access to the ticket by its ticket number. Or you can click on the button below.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket created - OpenSupports',
              'Ticket created',
              'User {{name}} has created a new ticket titled <i>{{title}}</i>.',
              'You can access to the ticket by its ticket number.',
              '{{ticketNumber}}'
          ],
        ],
        'cn' => [
          'USER_SIGNUP' => [
              '注册 {{to}} - OpenSupports',
              '验证您的帐户',
              '欢迎来到我们的支援中心{{name}} !. 我们需要您验证此电子邮件才能访问您的帐户。',
              '使用此代码 {{url}}/verify-token/{{to}}/{{verificationToken}} 或单击下面的按钮.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              '密码已编辑 - OpenSupports',
              '密码已更改',
              '嗨，{{name}}。 我们想通知您，您的密码已从您的客户面板更改。'
          ],
          'USER_EMAIL' => [
              '电子邮件已修改 - OpenSupports',
              '电子邮件已更改',
              '嗨，{{name}}。 我们想通知您，您的电子邮件已从您的客户面板更改为 {{newemail}}。'
          ],
          'PASSWORD_FORGOT' => [
              '恢复密码 - OpenSupports',
              '恢复密码',
              '喂 {{name}}。 您已要求恢复密码。',
              '使用此代码 {{url}}/recover-password?email={{to}}&token={{token}} 或单击下面的按钮.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              '访问系统更改 - OpenSupports',
              '访问系统更改',
              '您好，{{name}}。 访问票证的系统已更改。',
              '您可以通过使用您的电子邮件和票号访问和查看您的机票。 点击下面的按钮查看您的票。',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              '帐户已创建 - OpenSupports',
              '帐户已创建',
              '您好，{{name}}。 我们已经创建了一个帐户，您可以访问您发送给我们的票。',
              '您可以在下面使用此电子邮件 <i>({{to}})</i> 和密码访问您的帐户。 请在登录后立即更改密码。',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} 已创建票证 - OpenSupports',
              '票据创建',
              '您好，{{name}}。 您已将一张名为 <i>{{title}}</i> 的新票发送到我们的支持中心。',
              '您可以通过其票号访问票证。 或者你可以点击下面的按钮。',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} 新反应 - OpenSupports',
              '机票回应',
              '您好，{{name}}。 您在票证名称 <i>{{title}}</i> 中收到了回复。',
              '请点击下面查看新的回复。'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} 票已关闭 - OpenSupports',
              '票關閉',
              '您好，{{name}}。 您发送的名为 <i>{{title}}</i> 的票已经关闭。',
              '您可以通过其票号访问票证。 或者你可以点击下面的按钮。'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} 已创建票证 - OpenSupports',
              '票据创建',
              '用戶 {{name}}。 他創造了一個題為新票 <i>{{title}}</i>。',
              '您可以通过其票号访问票证。',
              '{{ticketNumber}}'
          ],
        ],
        'de' => [
          'USER_SIGNUP' => [
              'Anmelden {{to}} - OpenSupports',
              'Überprüfen Sie Ihr Konto',
              'Willkommen in unserem Support-Center, {{name}} !. Wir müssen Sie diese E-Mail bestätigen, um Zugang zu Ihrem Konto zu erhalten.',
              'Verwenden Sie diesen Code in {{url}}/verify-token/{{to}}/{{verificationToken}} oder klicken Sie auf die Schaltfläche unten.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Passwort bearbeitet - OpenSupports',
              'Passwort geändert',
              'Hallo, {{name}}. Wir möchten Sie darüber informieren, dass sich Ihr Passwort von Ihrem Kundenbereich geändert hat.'
          ],
          'USER_EMAIL' => [
              'E-Mail bearbeitet - OpenSupports',
              'E-Mail geändert',
              'Hallo, {{name}}. Wir möchten Sie darüber informieren, dass Ihre E-Mail von Ihrem Kundenbereich zu {{newemail}} geändert wurde.'
          ],
          'PASSWORD_FORGOT' => [
              'Passwort wiederherstellen - OpenSupports',
              'Passwort wiederherstellen',
              'Hallo, {{name}}. Sie haben aufgefordert, Ihr Passwort wiederherzustellen.',
              'Verwenden Sie diesen Code in {{url}}/recover-password?email={{to}}&token={{token}} oder klicken Sie auf die Schaltfläche unten.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Access system changed - OpenSupports',
              'Zugriffssystem geändert',
              'Hallo, {{name}}. Das System für den Zugriff auf Tickets hat sich geändert.',
              'können mit Ihren E-Mails und der Ticketnummer auf Ihre Tickets zugreifen und sie sehen.Klicken Sie auf die Schaltfläche unten, um Ihre Tickets zu sehen.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account erstellt - OpenSupports',
              'Account erstellt',
              'Hallo, {{name}}. Wir haben ein Konto erstellt, wo Sie auf die Tickets zugreifen können, die Sie uns geschickt haben.',
              'Sie können auf Ihr Konto zugreifen, indem Sie diese E-Mail <i>({{to}})</i> und das Passwort unten verwenden.Bitte ändern Sie das Passwort, sobald Sie sich anmelden.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket erstellt - OpenSupports',
              'Ticket erstellt',
              'Hallo, {{name}}. Sie haben ein neues Ticket mit dem Titel <i>{{title}}</i> an unser Support-Center geschickt.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen. Oder klicken Sie auf die Schaltfläche unten.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Neue Antwort - OpenSupports',
              'Ticket antwortete',
              'Hallo, {{name}}. Sie haben eine Antwort im Tickettitel <i>{{title}}</i> erhalten.',
              'Bitte klicken Sie unten, um die neue Antwort zu sehen.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket geschlossen - OpenSupports',
              'Ticket geschlossen',
              'Hallo, {{name}}. Ein Ticket, das Sie mit dem Titel <i>{{title}}</i> gesendet haben, wurde geschlossen.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen. Oder klicken Sie auf die Schaltfläche unten.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket erstellt - OpenSupports',
              'Ticket erstellt',
              'Der Benutzer {{name}} hat ein neues Ticket erstellt berechtigt <i>{{title}}</i>.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen.',
              '{{ticketNumber}}'
          ],
        ],
        'es' => [
          'USER_SIGNUP' => [
              'Registrado {{to}} - OpenSupports',
              'Verifica tu cuenta',
              'Bienvenido a nuestro contro de soporte, {{name}}!. Necesitamos que verifiques este email para poder acceder a tu cuenta.',
              'Usá este código en {{url}}/verify-token/{{to}}/{{verificationToken}} o hacé click en el botón de abajo.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Contraseña a cambiado - OpenSupports',
              'Contraseña cambiada',
              'Hola, {{name}}. Queremos informate que tu contraseña a sido cambiada desde el panel de usuario.'
          ],
          'USER_EMAIL' => [
              'Email a cambiado - OpenSupports',
              'Email a cambiado',
              'Hola, {{name}}. Queremos informate que tu email ha cambiado a {{newemail}} desde el panel de control.'
          ],
          'PASSWORD_FORGOT' => [
              'Recuperar contraseña - OpenSupports',
              'Recuperar contraseña',
              'Hola, {{name}}. Has requerido recuperar tu contraseña.',
              'Usá este codigo en {{url}}/recover-password?email={{to}}&token={{token}} o hacé click en el botón de abajo.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Sistema de acceso cambiado - OpenSupports',
              'Sistema de acceso cambiado',
              'Hola, {{name}}. El sistema para acceder a los tickets ha cambiado.',
              'Ahora podes acceder a los tickets usando tu email y el numero de ticket.Hacé click en el botón de abajo para poder ver los tickets.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Cuenta creada - OpenSupports',
              'Cuenta creada',
              'Hola, {{name}}. Hemos creado una cuenta donde puedes acceder a los tickets que nos has enviado.',
              'Puedes acceder usando tu email <i>({{to}})</i> y el la contraseña de abajo.Por favor, cambia tu contraseña tan pronto como ingreses al panel de usuario.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket creado - OpenSupports',
              'Ticket creado',
              'Hola, {{name}}. Has creado un nuevo ticket titulado <i>{{title}}</i> en nuestro sistema de soporte.',
              'Puedes ver el ticket usando el numero de ticket prensentado abajo o puedes hacer click en el botón de más abajo.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nueva respuesta - OpenSupports',
              'Nueva respuesta',
              'Hola, {{name}}. Has recibido una nueva respuesta en tu ticket titulado <i>{{title}}</i>.',
              'Por favor, has click abajo para ver la respuesta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket cerrado - OpenSupports',
              'Ticket cerrado',
              'Hola, {{name}}. Un ticket que enviaste titulado <i>{{title}}</i> ha sido cerrado.',
              'Puedes acceder al ticket por su numero de ticket o haciendo click en el botón de abajo.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket creado - OpenSupports',
              'Ticket creado',
              'El usuario {{name}} ha creado un nuevo ticket titulado <i>{{title}}</i>.',
              'Puedes ver el ticket usando el numero de ticket prensentado abajo.',
              '{{ticketNumber}}'
          ],
        ],
        'fr' => [
          'USER_SIGNUP' => [
              'S\'inscrire {{to}} - OpenSupports',
              'Vérifiez votre compte',
              'Bienvenue dans notre centre de support, {{name}}!. Nous vous demandons de vérifier cet e-mail afin d accéder à votre compte.',
              'Utilisez ce code dans {{url}}/verify-token/{{to}}/{{verificationToken}} ou cliquez sur le bouton ci-dessous.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Mot de passe modifié - OpenSupports',
              'Mot de passe changé',
              'Salut, {{name}}. Nous souhaitons vous informer que votre mot de passe a changé de votre panel client.'
          ],
          'USER_EMAIL' => [
              'Courrier électronique - OpenSupports',
              'Email modifié',
              'Salut, {{name}}. Nous souhaitons vous informer que votre adresse e-mail est devenue {{newemail}} dans votre panneau client.'
          ],
          'PASSWORD_FORGOT' => [
              'Récupérer mot de passe - OpenSupports',
              'Récupérer mot de passe',
              'Salut, {{name}}. Vous avez demandé à récupérer votre mot de passe.',
              'Utilisez ce code dans {{url}}/recover-password?email={{to}}&token={{token}} ou cliquez sur le bouton ci-dessous.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Système d\'accès modifié - OpenSupports',
              'Système d\'accès modifié',
              'Bonjour, {{name}}.Le système d\'accès aux tickets a changé.',
              'Vous pouvez accéder et voir vos billets en utilisant votre email et le numéro de ticket.Cliquez sur le bouton ci-dessous pour voir vos billets.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Compte créé - OpenSupports',
              'Compte créé',
              'Bonjour, {{name}}. Nous avons créé un compte où vous pouvez accéder aux billets que vous nous avez envoyés.',
              'Vous pouvez accéder à votre compte en utilisant ce courriel <i>({{to}})</i> et votre mot de passe ci-dessous.Veuillez modifier le mot de passe dès que vous vous connectez.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket créé - OpenSupports',
              'Ticket créé',
              'Bonjour, {{name}}. Vous avez envoyé un nouveau ticket intitulé <i>{{title}}</i> à notre centre de support.',
              'Vous pouvez accéder au billet par son numéro de ticket. Ou vous pouvez cliquer sur le bouton ci-dessous.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nouvelle réponse - OpenSupports',
              'Ticket répondu',
              'Bonjour, {{name}}. Vous avez reçu une réponse dans le titre du ticket <i>{{title}}</i>.',
              'Veuillez cliquer ci-dessous pour voir la nouvelle réponse.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Billet fermé - OpenSupports',
              'Billet fermé',
              'Bonjour, {{name}}. Un billet que vous avez envoyé intitulé <i>{{title}}</i> a été fermé.',
              'Vous pouvez accéder au billet par son numéro de ticket. Ou vous pouvez cliquer sur le bouton ci-dessous.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket créé - OpenSupports',
              'Ticket créé',
              'L\'utilisateur {{name}}. a créé un nouveau poste intitulé <i>{{title}}</i>.',
              'Vous pouvez accéder au billet par son numéro de ticket.',
              '{{ticketNumber}}'
          ],
        ],
        'in' => [
          'USER_SIGNUP' => [
              'Daftar - OpenSupports',
              'अपने खाते को सत्यापित करें',
              'हमारे समर्थन केंद्र में आपका स्वागत है {{name}}!. आपके खाते तक पहुंच प्राप्त करने के लिए हमें आपको यह ईमेल सत्यापित करने की आवश्यकता है।',
              'इस कोड का उपयोग करें {{url}}/verify-token/{{to}}/{{verificationToken}} या नीचे दिए गए बटन पर क्लिक करें।',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'sandi diedit - OpenSupports',
              'संकेतशब्द परवर्तित',
              'नमस्ते {{name}}. हम आपको सूचित करना चाहते हैं कि आपका पासवर्ड आपके ग्राहक पैनल से बदल गया है।'
          ],
          'USER_EMAIL' => [
              'email diedit - OpenSupports',
              'ईमेल बदल गया',
              'नमस्ते {{name}}। हम आपको सूचित करना चाहते हैं कि आपका ईमेल आपके ग्राहक पैनल से {{newemail}} में बदल गया है।'
          ],
          'PASSWORD_FORGOT' => [
              'memulihkan password - OpenSupports',
              'गोपनीय शब्द पुन प्राप्त करे',
              'नमस्ते {{name}}. आपने अपना पासवर्ड पुनर्प्राप्त करने का अनुरोध किया है',
              'इस कोड का उपयोग करें {{url}}/recover-password?email={{to}}&token={{token}} या नीचे दिए गए बटन पर क्लिक करें.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'sistem akses berubah - OpenSupports',
              'एक्सेस सिस्टम बदल गया',
              'नमस्ते {{name}}. टिकट का उपयोग करने के लिए सिस्टम बदल गया है।',
              'आप अपने ईमेल और टिकट नंबर का उपयोग करके अपने टिकट तक पहुंच सकते हैं और देख सकते हैं।अपने टिकट देखने के लिए नीचे दिए गए बटन पर क्लिक करें।',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Akun telah dibuat - OpenSupports',
              'खाता बन गय',
              'नमस्ते {{name}}. हमने एक खाता बनाया है, जहां आप हमारे द्वारा भेजे गए टिकटों तक पहुंच सकते हैं।',
              'आप इस ईमेल <i>({{to}})</i> और नीचे दिए गए पासवर्ड का उपयोग करके अपने खाते का उपयोग कर सकते हैं।जैसे ही आप लॉग इन करते हैं, तभी पासवर्ड बदल दें।',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} tiket dibuat - OpenSupports',
              'टिकट बनाय',
              'नमस्ते {{name}}. आपने हमारे समर्थन केंद्र पर <i>{{title}}</i> नामक एक नया टिकट भेजा है.',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं। या आप नीचे दिए गए बटन पर क्लिक कर सकते हैं।',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} tanggapan baru - OpenSupports',
              'टिकट जवाब दिया',
              'नमस्ते {{name}}. आपको टिकट के शीर्षक में एक प्रतिक्रिया मिली है <i>{{title}}</i>.',
              'कृपया नया प्रतिसाद देखने के लिए नीचे क्लिक करें।'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} tiket ditutup - OpenSupports',
              'Tiket ditutup',
              'नमस्ते {{name}}. आपके द्वारा लिखे गए टिकट <i>{{title}} </i> को बंद कर दिया गया है।',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं। या आप नीचे दिए गए बटन पर क्लिक कर सकते हैं।'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} tiket dibuat - OpenSupports',
              'टिकट बनाया',
              'उपयोगकर्ता {{name}} हकदार एक नया पद बनाया गया है <i>{{title}}</i>.',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं।',
              '{{ticketNumber}}'
          ],
        ],
        'it' => [
          'USER_SIGNUP' => [
              'Sei iscritto {{to}} - OpenSupports',
              'Verifica il tuo account',
              'Benvenuto, {{name}}!. Devi verificare questa email per accedere al tuo account.',
              'Clicca sul link {{url}}/verify-token/{{to}}/{{verificationToken}} o clicca sul pulsante qui sotto.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Password modificata - OpenSupports',
              'Password modificata',
              'Ciao, {{name}}. Vogliamo informarti che la tua password è stata modificata dal tuo pannello di controllo.'
          ],
          'USER_EMAIL' => [
              'E-mail modificata - OpenSupports',
              'L\'email è stata modificata',
              'Ciao, {{name}}. Vogliamo informarti che la tua email è stata modificata {{newemail}} dal tuo pannello di controllo.'
          ],
          'PASSWORD_FORGOT' => [
              'Recupera la password - OpenSupports',
              'Recupera password',
              'Ciao, {{name}}. Hai richiesto di recuperare la tua password.',
              'Clicca sul link {{url}}/recover-password?email={{to}}&token={{token}} o clicca sul pulsante qui sotto.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Il sistema di accesso è cambiato - OpenSupports',
              'Modifica sistema di accesso',
              'Ciao, {{name}}. Il sistema di accesso ai tuoi tickets è cambiato.',
              'Puoi accedere ai tuoi ticket usando la tua email e il numero del ticket.Clicca sul bottone qui sotto per vedere i tuoi tickets.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account creato - OpenSupports',
              'Account creato',
              'Ciao, {{name}}. Abbiamo creato il tuo account.',
              ' Puoi accedere al tuo account utilizzando questa email <i>({{to}})</i> e la password qui sotto.Ti consigliamo di cambiare la password dopo il primo accesso.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} ticket creato - OpenSupports',
              'Ticket inviato',
              'Ciao, {{name}}. Hai inviato un nuovo ticket <i>{{title}}</i> al nostro centro si assistenza.',
              'È possibile accedere al ticket attraverso il numero del ticket. Oppure puoi cliccare sul bottone qui sotto.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Ticket risposto - OpenSupports',
              'Risposta al tuo ticket',
              'Ciao, {{name}}. Hai ricevuto una risposta al tuo ticket <i>{{title}}</i>.',
              'Clicca qui sotto per leggere la risposta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket chiuso - OpenSupports',
              'Ticket chiuso',
              'Ciao, {{name}}. Il ticket che hai inviato <i>{{title}}</i> è stato chiuso.',
              'È possibile accedere al ticket attraverso il numero del ticket. Oppure puoi cliccare sul bottone qui sotto.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket creato - OpenSupports',
              'Ticket inviato',
              'l\'utente {{name}} ha creato un nuovo titolo dal titolo <i>{{title}}</i>',
              'È possibile accedere al ticket con il suo numero di ticket.',
              '{{ticketNumber}}'
          ],
        ],
        'jp' => [
          'USER_SIGNUP' => [
              'サインアップ - OpenSupports',
              'アカウントを確認する',
              'サポートセンターへようこそ, {{name}}!. アカウントにアクセスするには、このメールを確認する必要があります。',
              'でこのコードを使用 {{url}}/verify-token/{{to}}/{{verificationToken}} 下のボタンをクリックしてください.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'パスワードの編集 - OpenSupports',
              'パスワード変更済み',
              'こんにちは、{{name}}。 お客様のパスワードがお客様のパネルから変更されたことをお知らせいたします。'
          ],
          'USER_EMAIL' => [
              '電子メールを編集しました - OpenSupports',
              'メールが変更されました',
              'こんにちは、{{name}}。 お客様のメールがお客様のパネルから{{newemail}}に変更されたことをお知らせいたします。'
          ],
          'PASSWORD_FORGOT' => [
              'パスワードを回復 - OpenSupports',
              'パスワードを回復',
              'こんにちは、{{name}}。 パスワードの回復を要求しました。',
              'でこのコードを使用 {{url}}/recover-password?email={{to}}&token={{token}} 下のボタンをクリックしてください.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'アクセスシステムが変更されました - OpenSupports',
              'アクセスシステムが変更されました',
              'こんにちは、{{name}}。 チケットにアクセスするシステムが変更されました。',
              'あなたはあなたの電子メールとチケット番号を使ってチケットにアクセスして見ることができます。チケットを見るには、下のボタンをクリックしてください。',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'アカウントが作成されました - OpenSupports',
              'アカウントが作成されました',
              'こんにちは、{{name}}。 あなたが送ったチケットにアクセスできるアカウントを作成しました。',
              '下記のメール<i>（{{to}}）</i>とパスワードを使用してアカウントにアクセスできます。ログインするとすぐにパスワードを変更してください。',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} チケットが作成されました - OpenSupports',
              'チケットが作成されました',
              'こんにちは、{{name}}。<i>{{title}}</i> という新しいチケットをサポートセンターにお送りしました。',
              'そのチケット番号でチケットにアクセスできます。 または、下のボタンをクリックしてください。',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} 新しい応答 - OpenSupports',
              'チケットが応答しました',
              'こんにちは、{{name}}。 あなたはチケットのタイトル <i>{{title}}</i>で回答を受け取りました。',
              '新しいレスポンスを見るには、下記をクリックしてください。'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} チケットが閉じられました - OpenSupports',
              'チケットが閉じられました',
              'こんにちは、{{name}}。<i>{{title}}</i> というタイトルのチケットは閉鎖されました。',
              'そのチケット番号でチケットにアクセスできます。 または、下のボタンをクリックしてください。'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} チケットが作成されました - OpenSupports',
              'チケットが作成されました',
              'ユーザーは {{name}} 彼は題した新しいチケットを作成しました <i>{{title}}</i>。',
              'そのチケット番号でチケットにアクセスできます。',
              '{{ticketNumber}}'
          ],
        ],
        'pt' => [
          'USER_SIGNUP' => [
              'Inscrever-se {{to}} - OpenSupports',
              'Verifique sua conta',
              'Bem-vindo ao nosso centro de suporte, {{name}}!. Precisamos que você verifique este e-mail para acessar sua conta.',
              'Use este código em {{url}}/verify-token/{{to}}/{{verificationToken}} ou clique no botão abaixo.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Senha editada - OpenSupports',
              'Senha alterada',
              'Olá, {{name}}. Queremos informá-lo de que sua senha foi alterada do seu painel de clientes.'
          ],
          'USER_EMAIL' => [
              'Email editado - OpenSupports',
              'E-mail alterado',
              'Oi, {{name}}. Queremos informar que seu e-mail foi alterado para {{newemail}} do seu painel de clientes.'
          ],
          'PASSWORD_FORGOT' => [
              'Recuperar senha - OpenSupports',
              'Recuperar senha',
              'Olá, {{name}}. Você solicitou a recuperação da sua senha.',
              'Use este código em {{url}}/recover-password?email={{to}}&token={{token}} ou clique no botão abaixo.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Sistema de acesso alterado - OpenSupports',
              'Sistema de acesso alterado',
              'Oi, {{name}}. O sistema de acesso aos tickets mudou.',
              'Você pode acessar e ver seus bilhetes usando seu e-mail eo número do bilhete.Clique no botão abaixo para ver os seus bilhetes.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Conta criada - OpenSupports',
              'Conta criada',
              'Oi, {{name}}. Criamos uma conta onde você pode acessar os ingressos que você nos enviou.',
              'Você pode acessar sua conta usando este e-mail <i>({{to}})</i> e a senha abaixo.Por favor, altere a senha assim que fizer login.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket criado - OpenSupports',
              'Ticket criado',
              'Olá, {{name}}. Você enviou um novo ticket intitulado <i>{{title}}</i> para o nosso centro de suporte.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nova resposta - OpenSupports',
              'Ticket respondeu',
              'Olá, {{name}}. Recebeu uma resposta no título do bilhete <i>{{title}}</i>.',
              'Por favor, clique abaixo para ver a nova resposta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Bilhete fechado - OpenSupports',
              'Bilhete fechado',
              'Olá, {{name}}. Um bilhete que você enviou intitulado <i>{{title}}</i> foi fechado.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket criado - OpenSupports',
              'Ticket criado',
              'O usuário {{name}} criou um novo bilhete de direito <i>{{title}}</i>.',
              'Você pode acessar o bilhete pelo seu número de bilhete.',
              '{{ticketNumber}}'
          ],
        ],
        'ru' => [
          'USER_SIGNUP' => [
              'Зарегистрироваться {{to}} - OpenSupports',
              'подтвердите ваш аккаунт',
              'Добро пожаловать в наш центр поддержки, {{name}}!. Нам нужно, чтобы вы подтвердили это письмо, чтобы получить доступ к вашей учетной записи.',
              'Используйте этот код в {{url}}/verify-token/{{to}}/{{verificationToken}} или нажмите кнопку ниже.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Пароль изменен - OpenSupports',
              'пароль изменен',
              'Здравствуй {{name}}. Мы хотим сообщить вам, что ваш пароль был изменен с вашей клиентской панели.'
          ],
          'USER_EMAIL' => [
              'Сообщение изменено - OpenSupports',
              'Yout электронная почта изменена',
              'Здравствуй, {{name}}. Мы хотим сообщить вам, что ваше письмо было изменено на {{newemail}} с вашей панели клиентов.'
          ],
          'PASSWORD_FORGOT' => [
              'Восстановить пароль - OpenSupports',
              'Восстановить пароль',
              'Здравствуй, {{name}}. Вы запросили восстановить пароль.',
              'Используйте этот код в {{url}}/recover-password?email={{to}}&token={{token}} или нажмите кнопку ниже.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Система доступа изменена - OpenSupports',
              'Система доступа изменена',
              'Здравствуйте, {{name}}. Система доступа к билетам изменилась.',
              'Вы можете получить доступ к своим билетам и посмотреть их, используя свою электронную почту и номер билета.Нажмите кнопку ниже, чтобы увидеть свои билеты.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Аккаунт создан - OpenSupports',
              'Аккаунт создан',
              'Здравствуйте, {{name}}. Мы создали учетную запись, где вы можете получить доступ к билетам, которые вы нам отправили.',
              'Вы можете получить доступ к своей учетной записи, используя это электронное письмо <i>({{to}})</i> и пароль ниже.Измените пароль, как только вы войдете в систему.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Создан билет - OpenSupports',
              'Создан билет',
              'Здравствуйте, {{name}}. Вы отправили новый билет с названием <i>{{title}}</i> в наш центр поддержки.',
              'Вы можете получить доступ к билету по его номеру билета. Или вы можете нажать на кнопку ниже.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Новый ответ - OpenSupports',
              'Отправлен билет',
              'Здравствуйте, {{name}}. Вы получили ответ в названии билета <i>{{title}}</i>.',
              'Нажмите ниже, чтобы увидеть новый ответ.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Билет закрыт - OpenSupports',
              'Билет закрыт',
              'Здравствуйте, {{name}}. Билет, который вы отправили под названием <i>{{title}}</i>, был закрыт.',
              'Вы можете получить доступ к билету по его номеру билета. Или вы можете нажать на кнопку ниже.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Создан билет - OpenSupports',
              'Создан билет',
              'Пользователь {{name}} создал новый билет под названием <i>{{title}}</i>.',
              'Вы можете получить доступ к билету по его номеру билета.',
              '{{ticketNumber}}'
          ],
        ],
        'tr' => [
          'USER_SIGNUP' => [
              'kaydol {{to}} - OpenSupports',
              'Hesabınızı doğrulayın',
              'Destek merkezimize hoş geldiniz, {{name}}!. Hesabınıza erişebilmek için bu e-postayı doğrulamanız gerekiyor.',
              'Bu kodu şu adreste kullanın {{url}}/verify-token/{{to}}/{{verificationToken}} veya aşağıdaki butona tıklayın.',
              '{{verificationToken}}'
          ],
          'USER_PASSWORD' => [
              'Şifre düzenlendi - OpenSupports',
              'şifre değişti',
              'Merhaba, {{name}}. Şifrenizin müşteri panelinizden değiştirildiğini size bildirmek istiyoruz.'
          ],
          'USER_EMAIL' => [
              'E-posta düzenlendi - OpenSupports',
              'E-posta değişti',
              'Merhaba, {{name}}. E-postanızın müşteri panelinizden {{newemail}} olarak değiştiğini bildirmek istiyoruz.'
          ],
          'PASSWORD_FORGOT' => [
              'Şifre kurtarma - OpenSupports',
              'Şifre kurtarma',
              'Merhaba, {{name}}. Şifrenizi geri yüklemenizi istediniz.',
              'Bu kodu şu adreste kullanın {{url}}/recover-password?email={{to}}&token={{token}} veya aşağıdaki butona tıklayın.',
              '{{token}}'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Erişim sistemi değiştirildi - OpenSupports',
              'Erişim sistemi değiştirildi',
              'Merhaba, {{name}}. Biletleri erişmek için sistem değişti.',
              'E-posta adresinizi ve bilet numaranızı kullanarak biletinize erişebilir ve biletlerini görebilirsiniz.Biletlerini görmek için aşağıdaki butona tıklayın.',
              '{{tickets}}'
          ],
          'USER_SYSTEM_ENABLED' => [
              'Hesap oluşturuldu - OpenSupports',
              'Hesap oluşturuldu',
              'Merhaba, {{name}}. Bize gönderdiğiniz bilete erişebileceğiniz bir hesap oluşturduk.',
              'Hesabınıza, <i>({{to}})</i> e-posta adresini kullanarak ve aşağıdaki şifreyle erişebilirsiniz.Lütfen giriş yaptığınızda şifreyi değiştirin.',
              '{{password}}'
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Bilet oluşturuldu - OpenSupports',
              'Bilet oluşturuldu',
              'Merhaba, {{name}}. Destek merkezimize <i>{{title}}</i> başlıklı yeni bir bilet gönderdiniz.',
              'Bilete bilet numarasından erişebilirsiniz. Ya da aşağıdaki düğmeyi tıklayabilirsiniz.',
              '{{ticketNumber}}'
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Yeni yanıt - OpenSupports',
              'Bilet yanıtladı',
              'Merhaba, {{name}}. <i>{{title}}</i> başlıklı biletten bir cevap aldınız.',
              'Yeni yanıtı görmek için lütfen aşağıya tıklayınız.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Bilet kapalı - OpenSupports',
              'Bilet kapandı',
              'Merhaba, {{name}}. Başlık gönderdiğiniz bir bilet <i>{{title}}</i> kapatıldı.',
              'Bilete bilet numarasından erişebilirsiniz. Ya da aşağıdaki düğmeyi tıklayabilirsiniz.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Bilet oluşturuldu - OpenSupports',
              'Bilet oluşturuldu',
              'Kullanıcı {{name}} başlıklı yeni bir bilet yarattı <i>{{title}}</i> .',
              'Bilete bilet numarasından erişebilirsiniz.',
              '{{ticketNumber}}'
          ],
        ],
    ];
  }
}