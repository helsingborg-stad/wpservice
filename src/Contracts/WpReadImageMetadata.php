<?php

namespace WpService\Contracts;

interface WpReadImageMetadata
{
    /**
     * Gets extended image metadata, exif or iptc as available.
     *
     * Retrieves the EXIF metadata aperture, credit, camera, caption, copyright, iso
     * created_timestamp, focal_length, shutter_speed, and title.
     *
     * The IPTC metadata that is retrieved is APP13, credit, byline, created date
     * and time, caption, copyright, and title. Also includes FNumber, Model,
     * DateTimeDigitized, FocalLength, ISOSpeedRatings, and ExposureTime.
     *
     * @todo Try other exif libraries if available.
     * @since 2.5.0
     *
     * @param string $file
     * @return array|false Image metadata array on success, false on failure.
     */
    public function wpReadImageMetadata(string $file): array|false;
}
