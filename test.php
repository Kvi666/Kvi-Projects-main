<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .auto-type {
      white-space: nowrap;
      overflow: hidden;
      border-right: 2px solid #000;
      margin: 10px 0;
      font-size: 18px;
    }

    @keyframes typing {
      from, to {
        width: 0;
      }
    }

    @keyframes backspace {
      from {
        width: 100%;
      }
      to {
        width: 0;
      }
    }
  </style>
</head>
<body>
  <div id="auto-type-container"></div>

  <script>
    const textArray = [
      'This is the first line.',
      'Here is the second line.',
      'And a third line for variety.'
    ];

    function createAutoTypeElement(text) {
      const div = document.createElement('div');
      div.className = 'auto-type';
      div.textContent = text;
      return div;
    }

    function autoType(index) {
      const container = document.getElementById('auto-type-container');
      container.innerHTML = '';

      const text = textArray[index];
      const autoTypeElement = createAutoTypeElement(text);
      container.appendChild(autoTypeElement);

      // Type forward
      autoTypeElement.style.animation = 'typing 3s steps(40) forwards';

  </script>
</body>
</html>
