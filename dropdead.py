import time
import sys
import os

lyrics = [
    "🎵 Drop Dead - Olivia Rodrigo 🎵",
    "",
    "Ooh one night I was bored in bed",
    "And stalked you on the internet",
    "It's feminine intuition",
    "'Cuz I always had a vision of us standing like this",
    "All pressed up in the bathroom line",
    "You're looking like an angel on the walls of Versailles",
    "The most alive I've ever been",
    "But kiss me and I might drop dead"
]

def ketik(teks, delay=0.05):
    for huruf in teks:
        sys.stdout.write(huruf)
        sys.stdout.flush()
        time.sleep(delay)
    print()

os.system("cls" if os.name == "nt" else "clear")

print("\n")
print("══════════════════════════════")
print("        Olivia Rodrigo")
print("══════════════════════════════\n")

for line in lyrics:
    ketik(line)
    time.sleep(1)