### [This doesn't work anymore]



# Youtube Direct
**A php API to get youtube video direct streaming info.**

Get direct download link and other informations of a youtube video.

---

# How to use
Make an object of the ``logic`` class, from ``logic.php`` file. Then, copy a youtube video link and call the ``getId`` function with that link as an parameter! And then call ``getVideoInfo`` function from the class, this will return an array that contains video informations.

Modify the script to manage video links or download and other things.

---

# How it works
The working process of the script is very simple.

The ``getId`` function extract's ``id`` name from a youtube video link. Youtube video link can be various type, such as:
- *`https://youtu.be/XXXXXXXXXXX`*
- *`https://youtube.com/watch?v=XXXXXXXXXXX`*
- *`https://m.youtube.com/watch?v=XXXXXXXXXXX`*

Here, *`XXXXXXXXXXX`* will be the ``id`` name of the video. And this id name will be used for getting video information.

The ``getVideoInfo`` function works for collect and retrieve video informations.

---

# Host requirement
The script is written in pure php, so your host must have to be php enabled! But no third party software will be needed for it.

---

**&copy; Monzurul Hasan**
