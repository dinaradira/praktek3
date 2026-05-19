import pygame
import random
import time

pygame.init()
pygame.mixer.init()

WIDTH = 1280
HEIGHT = 720

screen = pygame.display.set_mode((WIDTH, HEIGHT))

pygame.display.set_caption("Drop Dead")

clock = pygame.time.Clock()

# LOAD MUSIC
pygame.mixer.music.load("music.mp3")
pygame.mixer.music.play()

# LOAD BACKGROUND
bg = pygame.image.load("bg.jpg")
bg = pygame.transform.scale(bg, (WIDTH, HEIGHT))

font = pygame.font.SysFont("Arial", 28, bold=True)

lyrics = [

(0, "'CUZ I ALWAYS HAD A VISION OF US STANDING LIKE THIS", (245,222,179)),

(5, "ALL PRESSED UP IN THE BATHROOM LINE", (255,255,255)),

(10, "YOU'RE LOOKING LIKE AN ANGEL ON THE WALLS OF VERSAILLES", (230,230,250)),

(16, "THE MOST ALIVE I'VE EVER BEEN", (255,250,205)),

(21, "BUT KISS ME AND I MIGHT", (255,228,196)),

(25, "KISS ME AND I MIGHT", (255,255,255)),

(29, "KISS ME AND I MIGHT DROP DEAD", (255,220,220))

]

notes = []

shown = []

class Note:

    def _init_(self, text, color):

        self.text = text

        self.color = color

        self.x = random.randint(100, 900)

        self.y = HEIGHT + 200

        self.angle = random.randint(-6, 6)

        self.surface = pygame.Surface((340,180))

        self.surface.fill(color)

    def update(self):

        self.y -= 1.3

    def draw(self):

        rotated = pygame.transform.rotate(
            self.surface,
            self.angle
        )

        rect = rotated.get_rect(
            center=(self.x, self.y)
        )

        screen.blit(rotated, rect)

        text_render = font.render(
            self.text,
            True,
            (0,0,0)
        )

        text_rect = text_render.get_rect(
            center=rect.center
        )

        screen.blit(text_render, text_rect)

running = True

flash = False

while running:

    for event in pygame.event.get():

        if event.type == pygame.QUIT:

            running = False

    current_time = pygame.mixer.music.get_pos() / 1000

    screen.blit(bg, (0,0))

    # MUNCULKAN NOTE
    for index, lyric in enumerate(lyrics):

        lyric_time, text, color = lyric

        if current_time >= lyric_time and index not in shown:

            shown.append(index)

            notes.append(Note(text, color))

    # UPDATE NOTE
    for note in notes:

        note.update()

        note.draw()

    # CRT LINES
    for i in range(0, HEIGHT, 4):

        pygame.draw.line(
            screen,
            (20,20,20),
            (0,i),
            (WIDTH,i)
        )

    # ENDING
    if current_time >= 33:

        flash = True

    if flash:

        for i in range(6):

            pygame.draw.rect(
                screen,
                (255,255,255),
                (0,0,WIDTH,HEIGHT)
            )

            pygame.display.update()

            pygame.time.delay(70)

            screen.blit(bg,(0,0))

            pygame.display.update()

            pygame.time.delay(70)

        pygame.draw.rect(
            screen,
            (0,0,0),
            (0,0,WIDTH,HEIGHT)
        )

        pygame.display.update()

        pygame.time.delay(3000)

        running = False

    pygame.display.update()

    clock.tick(60)

pygame.quit()