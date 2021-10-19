<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class SessionOptions {
    /**
     * @param string $uniqueName The unique_name
     * @param string $status The status
     * @return ReadSessionOptions Options builder
     */
    public static function read($uniqueName = Values::NONE, $status = Values::NONE) {
        return new ReadSessionOptions($uniqueName, $status);
    }

    /**
     * @param string $uniqueName A unique, developer assigned name of this Session.
     * @param \DateTime $dateExpiry The date this Session should expire
     * @param integer $ttl TTL for a Session, in seconds.
     * @param string $mode The Mode of this Session
     * @param string $status Session status
     * @param array $participants The participants
     * @return CreateSessionOptions Options builder
     */
    public static function create($uniqueName = Values::NONE, $dateExpiry = Values::NONE, $ttl = Values::NONE, $mode = Values::NONE, $status = Values::NONE, $participants = Values::NONE) {
        return new CreateSessionOptions($uniqueName, $dateExpiry, $ttl, $mode, $status, $participants);
    }

    /**
     * @param \DateTime $dateExpiry The date this Session should expire
     * @param integer $ttl TTL for a Session, in seconds.
     * @param string $mode The mode
     * @param string $status The Status of this Session
     * @param array $participants The participants
     * @return UpdateSessionOptions Options builder
     */
    public static function update($dateExpiry = Values::NONE, $ttl = Values::NONE, $mode = Values::NONE, $status = Values::NONE, $participants = Values::NONE) {
        return new UpdateSessionOptions($dateExpiry, $ttl, $mode, $status, $participants);
    }
}

class ReadSessionOptions extends Options {
    /**
     * @param string $uniqueName The unique_name
     * @param string $status The status
     */
    public function __construct($uniqueName = Values::NONE, $status = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['status'] = $status;
    }

    /**
     * The unique_name
     * 
     * @param string $uniqueName The unique_name
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The status
     * 
     * @param string $status The status
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.ReadSessionOptions ' . implode(' ', $options) . ']';
    }
}

class CreateSessionOptions extends Options {
    /**
     * @param string $uniqueName A unique, developer assigned name of this Session.
     * @param \DateTime $dateExpiry The date this Session should expire
     * @param integer $ttl TTL for a Session, in seconds.
     * @param string $mode The Mode of this Session
     * @param string $status Session status
     * @param array $participants The participants
     */
    public function __construct($uniqueName = Values::NONE, $dateExpiry = Values::NONE, $ttl = Values::NONE, $mode = Values::NONE, $status = Values::NONE, $participants = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dateExpiry'] = $dateExpiry;
        $this->options['ttl'] = $ttl;
        $this->options['mode'] = $mode;
        $this->options['status'] = $status;
        $this->options['participants'] = $participants;
    }

    /**
     * Your unique identifier for this Session such as a Job ID or conversation ID. *Should not contain PII.*
     * 
     * @param string $uniqueName A unique, developer assigned name of this Session.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * An absolute time (ISO 8601) at which this Session should close. If this is populated, it takes precedence over TTL values.
     * 
     * @param \DateTime $dateExpiry The date this Session should expire
     * @return $this Fluent Builder
     */
    public function setDateExpiry($dateExpiry) {
        $this->options['dateExpiry'] = $dateExpiry;
        return $this;
    }

    /**
     * The time, in seconds, after the latest of Session create time or the Session's last Interaction time at which the session will expire.
     * 
     * @param integer $ttl TTL for a Session, in seconds.
     * @return $this Fluent Builder
     */
    public function setTtl($ttl) {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * The type of communications mediums allowed on a Session. Defaults to `voice-and-message`. Other options are `voice-only` or `message-only`.
     * 
     * @param string $mode The Mode of this Session
     * @return $this Fluent Builder
     */
    public function setMode($mode) {
        $this->options['mode'] = $mode;
        return $this;
    }

    /**
     * Set this value to `closed` to close the session. A Session can be re-opened by posting to a closed session with the value `in-progress`.  This will be `open` by default on create.
     * 
     * @param string $status Session status
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The participants
     * 
     * @param array $participants The participants
     * @return $this Fluent Builder
     */
    public function setParticipants($participants) {
        $this->options['participants'] = $participants;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.CreateSessionOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateSessionOptions extends Options {
    /**
     * @param \DateTime $dateExpiry The date this Session should expire
     * @param integer $ttl TTL for a Session, in seconds.
     * @param string $mode The mode
     * @param string $status The Status of this Session
     * @param array $participants The participants
     */
    public function __construct($dateExpiry = Values::NONE, $ttl = Values::NONE, $mode = Values::NONE, $status = Values::NONE, $participants = Values::NONE) {
        $this->options['dateExpiry'] = $dateExpiry;
        $this->options['ttl'] = $ttl;
        $this->options['mode'] = $mode;
        $this->options['status'] = $status;
        $this->options['participants'] = $participants;
    }

    /**
     * The date that this Session should expire, given in ISO 8601 format.
     * 
     * @param \DateTime $dateExpiry The date this Session should expire
     * @return $this Fluent Builder
     */
    public function setDateExpiry($dateExpiry) {
        $this->options['dateExpiry'] = $dateExpiry;
        return $this;
    }

    /**
     * The time, in seconds, after the latest of Session create time or the Session's last Interaction time at which the session will expire.
     * 
     * @param integer $ttl TTL for a Session, in seconds.
     * @return $this Fluent Builder
     */
    public function setTtl($ttl) {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * The mode
     * 
     * @param string $mode The mode
     * @return $this Fluent Builder
     */
    public function setMode($mode) {
        $this->options['mode'] = $mode;
        return $this;
    }

    /**
     * The Status of this Session. Set to `in-progress` to re-open a session or `closed` to close a session.
     * 
     * @param string $status The Status of this Session
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The participants
     * 
     * @param array $participants The participants
     * @return $this Fluent Builder
     */
    public function setParticipants($participants) {
        $this->options['participants'] = $participants;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.UpdateSessionOptions ' . implode(' ', $options) . ']';
    }
}