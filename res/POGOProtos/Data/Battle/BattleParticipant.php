<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Battle/BattleParticipant.php');

namespace POGOProtos\Data\Battle {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Data.Battle.BattleParticipant
  final class BattleParticipant extends ProtobufMessage {

    private $_unknown;
    private $activePokemon = null; // optional .POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1
    private $trainerPublicProfile = null; // optional .POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2
    private $reversePokemon = array(); // repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3
    private $defeatedPokemon = array(); // repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->activePokemon = new \POGOProtos\Data\Battle\BattlePokemonInfo($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattlePokemonInfo did not read the full length');

            break;
          case 2: // optional .POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->trainerPublicProfile = new \POGOProtos\Data\Player\PlayerPublicProfile($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Player\PlayerPublicProfile did not read the full length');

            break;
          case 3: // repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->reversePokemon[] = new \POGOProtos\Data\Battle\BattlePokemonInfo($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattlePokemonInfo did not read the full length');

            break;
          case 4: // repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->defeatedPokemon[] = new \POGOProtos\Data\Battle\BattlePokemonInfo($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattlePokemonInfo did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->activePokemon !== null) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, $this->activePokemon->size());
        $this->activePokemon->write($fp);
      }
      if ($this->trainerPublicProfile !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->trainerPublicProfile->size());
        $this->trainerPublicProfile->write($fp);
      }
      foreach($this->reversePokemon as $v) {
        fwrite($fp, "\x1a", 1);
        Protobuf::write_varint($fp, $v->size());
        $v->write($fp);
      }
      foreach($this->defeatedPokemon as $v) {
        fwrite($fp, "\"", 1);
        Protobuf::write_varint($fp, $v->size());
        $v->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->activePokemon !== null) {
        $l = $this->activePokemon->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->trainerPublicProfile !== null) {
        $l = $this->trainerPublicProfile->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->reversePokemon as $v) {
        $l = $v->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->defeatedPokemon as $v) {
        $l = $v->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearActivePokemon() { $this->activePokemon = null; }
    public function getActivePokemon() { return $this->activePokemon;}
    public function setActivePokemon(\POGOProtos\Data\Battle\BattlePokemonInfo $value) { $this->activePokemon = $value; }

    public function clearTrainerPublicProfile() { $this->trainerPublicProfile = null; }
    public function getTrainerPublicProfile() { return $this->trainerPublicProfile;}
    public function setTrainerPublicProfile(\POGOProtos\Data\Player\PlayerPublicProfile $value) { $this->trainerPublicProfile = $value; }

    public function clearReversePokemon() { $this->reversePokemon = array(); }
    public function getReversePokemonCount() { return count($this->reversePokemon); }
    public function getReversePokemon($index) { return $this->reversePokemon[$index]; }
    public function getReversePokemonArray() { return $this->reversePokemon; }
    public function setReversePokemon($index, array $value) {$this->reversePokemon[$index] = $value; }
    public function addReversePokemon(array $value) { $this->reversePokemon[] = $value; }
    public function addAllReversePokemon(array $values) { foreach($values as $value) {$this->reversePokemon[] = $value; }}

    public function clearDefeatedPokemon() { $this->defeatedPokemon = array(); }
    public function getDefeatedPokemonCount() { return count($this->defeatedPokemon); }
    public function getDefeatedPokemon($index) { return $this->defeatedPokemon[$index]; }
    public function getDefeatedPokemonArray() { return $this->defeatedPokemon; }
    public function setDefeatedPokemon($index, array $value) {$this->defeatedPokemon[$index] = $value; }
    public function addDefeatedPokemon(array $value) { $this->defeatedPokemon[] = $value; }
    public function addAllDefeatedPokemon(array $values) { foreach($values as $value) {$this->defeatedPokemon[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('active_pokemon', $this->activePokemon, null)
           . Protobuf::toString('trainer_public_profile', $this->trainerPublicProfile, null)
           . Protobuf::toString('reverse_pokemon', $this->reversePokemon, null)
           . Protobuf::toString('defeated_pokemon', $this->defeatedPokemon, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Battle.BattleParticipant)
  }

}