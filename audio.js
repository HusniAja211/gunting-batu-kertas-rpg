const audio = document.getElementById('bgAudio');
  const toggleBtn = document.getElementById('audioToggle');

  toggleBtn.addEventListener('click', () => {
    if (audio.paused) {
      audio.play();
      toggleBtn.textContent = '⏹️';
    } else {
      audio.pause();
      toggleBtn.textContent = '▶️';
    }
  });

  audio.addEventListener('ended', () => {
    toggleBtn.textContent = '▶️';
  });