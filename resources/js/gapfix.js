import GreenAudioPlayer from "green-audio-player/dist/js/green-audio-player";

class GreenAudioPlayerFix extends GreenAudioPlayer {
  constructor(player, options) {
    super(player, options);
    delete this.isDevice;
    this.isDevice =
      (/ipad|iphone|ipod|android/i.test(
        window.navigator.userAgent.toLowerCase()
      ) ||
        (navigator.platform === "MacIntel" && navigator.maxTouchPoints > 1)) &&
      !window.MSStream;
    this.overcomeIosLimitations();
  }
}

export default GreenAudioPlayerFix;