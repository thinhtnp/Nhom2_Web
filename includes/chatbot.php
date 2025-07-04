<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Chatbot</title>
  <style>
    #chat-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #007bff;
      color: white;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      font-size: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 999;
    }

    #chat-box {
      position: fixed;
      bottom: 90px;
      right: 20px;
      width: 300px;
      max-height: 400px;
      background: white;
      border: 1px solid #ccc;
      border-radius: 10px;
      display: none;
      flex-direction: column;
      z-index: 998;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    #chat-header {
      background-color: #007bff;
      color: white;
      padding: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      font-weight: bold;
    }

    #chat-messages {
      flex: 1;
      padding: 10px;
      overflow-y: auto;
      font-size: 14px;
    }

    #chat-input {
      display: flex;
      border-top: 1px solid #ccc;
    }

    #chat-input input {
      flex: 1;
      border: none;
      padding: 8px;
      font-size: 14px;
    }

    #chat-input button {
      border: none;
      padding: 8px 12px;
      background: #007bff;
      color: white;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div id="chat-icon" onclick="toggleChat()">💬</div>

<div id="chat-box">
  <div id="chat-header">Hỗ trợ</div>
  <div id="chat-messages">
    <div><strong>Bot:</strong> Chào bạn! Bạn cần hỗ trợ gì?</div>
  </div>
  <div id="chat-input">
    <input type="text" id="userInput" placeholder="Nhập câu hỏi...">
    <button onclick="sendMessage()">Gửi</button>
  </div>
</div>

<script>
  function toggleChat() {
    const box = document.getElementById("chat-box");
    box.style.display = box.style.display === "flex" ? "none" : "flex";
  }

  function sendMessage() {
    const input = document.getElementById("userInput");
    const msg = input.value.trim();
    if (!msg) return;

    const chat = document.getElementById("chat-messages");
    chat.innerHTML += `<div><strong>Bạn:</strong> ${msg}</div>`;
    chat.innerHTML += `<div><strong>Bot:</strong> Cảm ơn bạn đã nhắn, chúng tôi sẽ phản hồi sớm!</div>`;
    input.value = "";
    chat.scrollTop = chat.scrollHeight;
  }
</script>

</body>
</html>
