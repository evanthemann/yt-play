# yt-play

A PHP web interface for downloading YouTube videos and playing them on a Raspberry Pi connected to a display.

## What It Does

Provides a browser-based control panel that lets you:

- Download YouTube videos using yt-dlp, with control over video and audio format selection
- Play downloaded videos fullscreen on the Pi's display using mpv
- Reboot or shut down the Pi remotely

## How It Works

The app runs on a web server (Apache/Nginx) on the Raspberry Pi. PHP pages invoke shell commands to drive everything:

- **index.php** -- Main landing page with links to the download and playback interfaces.
- **yt-dlp.php** -- Single-page download workflow: list available formats for a YouTube URL, pick video and audio format codes, build and run a `yt-dlp` download command.
- **eureka.php** -- Alternative download interface that runs `yt-dlp` in the background via `nohup` and lets you check progress by reading a log file.
- **play.php** -- Lists downloaded files and lets you launch playback with `mpv --fs` on the Pi's display (DISPLAY=:0).
- **reboot.php / shutdown.php** -- Immediately reboot or shut down the Pi via `sudo`.

## Requirements

- Raspberry Pi with a display (HDMI or similar)
- PHP with a web server (e.g., Apache with mod_php)
- [yt-dlp](https://github.com/yt-dlp/yt-dlp) installed at `/usr/local/bin/yt-dlp`
- [mpv](https://mpv.io/) media player
- `www-data` (or equivalent web server user) needs passwordless `sudo` access for reboot, shutdown, and mpv playback
