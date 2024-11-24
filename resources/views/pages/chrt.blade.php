<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCD</title>
    <link rel="shortcut icon" type="image/x-icon" href="../style pages/image/Graduation logo 3.png">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .chat-container {
            display: flex;
            flex-direction: row;
            height: 100vh; /* ارتفاع 100٪ من ارتفاع العرض */
            border: 1px solid #ccc;
            overflow: hidden; /* لمنع تجاوز المحتوى عندما يزيد عن حجم الشاشة */
        }
        .user-list {
            width: 30%;
            border-right: 1px solid #ccc;
            background-color: #f0f0f0;
            overflow-y: auto; /* تمكين التمرير عندما يكون القائمة طويلة */
            padding-right: 10px;
        }
        .user-list .user-name {
            background-color: #ffffff;
            display: block;
            padding: 12px 10px;
            margin-bottom: 5px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .user-list .user-name:hover {
            background-color: #e5e5e5;
        }
        .message-area {
            width: 70%;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-left: 1px solid #ccc;
            padding-top: 20px;
            padding-left: 20px;
            padding-bottom: 20px;
            overflow: hidden;
            position: relative;
        }
        .message-area h2 {
            font-size: 18px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .messages {
            flex-grow: 1;
            overflow-y: auto;
            padding: 10px 20px;
        }
        .message-form {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px 20px;
            background-color: #f0f0f0;
        }
        .message-form input[type="text"] {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 14px;
            outline: none;
        }
        .message-form button {
            padding: 12px 20px;
            border: none;
            border-radius: 20px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            outline: none;
        }
        .message-form button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-bottom: 10px;
            padding: 10px 20px;
            border-radius: 20px;
            max-width: 70%;
            clear: both;
            position: relative;
            font-size: 14px;
        }
        .message.user {
    background-color: #b3d4fc; /* لون الرسائل المرسلة (أزرق فاتح) */
    color: black;
    float: right;
    align-self: flex-end; /* تحديد موقع الرسالة المرسلة */
    max-width: 70%; /* عرض أقصى للرسائل لتحسين التصميم */
    padding: 10px; /* تباعد داخلي للرسالة */
    margin-bottom: 10px; /* تباعد بين الرسائل */
    border-radius: 15px; /* حواف مستديرة */
}

.message.other {
    background-color: #ffc9c9; /* لون الرسائل المستقبلة (أحمر فاتح) */
    color: black;
    float: left;
    align-self: flex-start; /* تحديد موقع الرسالة المستقبلة */
    max-width: 70%; /* عرض أقصى للرسائل لتحسين التصميم */
    padding: 10px; /* تباعد داخلي للرسالة */
    margin-bottom: 10px; /* تباعد بين الرسائل */
    border-radius: 15px; /* حواف مستديرة */
}

.message strong {
    font-weight: bold;
}

.message-content {
    margin-bottom: 5px; /* تباعد بسيط بين النص الرئيسي للرسالة والوقت والتاريخ */
}

.message time {
    font-size: 10px; /* حجم الخط أصغر */
    color: #666;
    margin-left: 10px; /* تعديل التباعد بين الوقت والرسالة */
    padding-top: 5px; /* تعديل التباعد العمودي بين الرسالة والوقت */
    padding-bottom: 3px; /* تعديل التباعد العمودي بين الرسالة والتاريخ */
    position: relative;
    display: block;
    clear: both;
}


        .selected-user {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="chat-container" data-user-id="{{ Auth::id() }}">
    <div class="user-list">
        <h2>Doctor</h2>
        <ul>
            @foreach($users as $user)
                <li>
                    <span class="user-name" data-user-id="{{ $user->id }}">{{ $user->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="message-area">
        <div class="selected-user" id="selectedUser"></div>
        <div id="messages" class="messages">
            <!-- Messages will be loaded here using JavaScript -->
        </div>
        <form id="sendMessageForm" class="message-form">
            @csrf
            <input type="hidden" id="receiverId" name="receiver_id">
            <input type="text" id="messageInput" name="message" placeholder="Type your message...">
            <button type="submit">Send</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatContainer = document.querySelector('.chat-container');
        const userId = chatContainer.getAttribute('data-user-id');

        document.querySelectorAll('.user-name').forEach(name => {
            name.addEventListener('click', function (event) {
                event.preventDefault();
                const receiverId = this.getAttribute('data-user-id');
                const selectedUserName = this.textContent.trim(); // اسم المستخدم المحدد
                document.getElementById('selectedUser').textContent = selectedUserName; // عرض اسم المستخدم في المستطيل
                loadMessages(receiverId);
            });
        });

        function loadMessages(receiverId) {
            axios.get(`/messages/${receiverId}`)
                .then(response => {
                    let messages = response.data;
                    let messagesHtml = '';
                    messages.forEach(message => {
                        let messageClass = message.sender_id == userId ? 'user' : 'other';
                        let messageStyle = message.sender_id == userId ? 'background-color: #dcf8c6; color: #000;' : 'background-color: #ffffff; color: #000;';
                        let messageTime = new Date(message.created_at).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                        let messageDate = new Date(message.created_at).toLocaleDateString();
                        messagesHtml += `<div class="message ${messageClass}">
                                            <strong>${message.sender.name}:</strong> ${message.message}
                                            <time>${messageTime} - ${messageDate}</time>
                                         </div>`;
                    });
                    document.getElementById('messages').innerHTML = messagesHtml;
                    document.getElementById('receiverId').value = receiverId;
                    scrollToBottom();
                })
                .catch(error => {
                    console.error('Error loading messages:', error);
                });
        }

        function scrollToBottom() {
            const messagesDiv = document.getElementById('messages');
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }

        document.getElementById('sendMessageForm').addEventListener('submit', function (event) {
            event.preventDefault();
            let formData = new FormData(this);
            axios.post('/messages/send', formData)
                .then(response => {
                    if (response.data.status === 'Message sent successfully!') {
                        document.getElementById('messageInput').value = '';
                        loadMessages(document.getElementById('receiverId').value);
                    }
                })
                .catch(error => {
                    console.error('Error sending message:', error);
                });
        });
    });
</script>

</body>
</html>
