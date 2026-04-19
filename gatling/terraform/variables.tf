variable "do_token" {
  description = "DigitalOcean API token (read/write)"
  type        = string
  sensitive   = true
}

variable "region" {
  description = "DigitalOcean region slug (e.g. nyc3, fra1, sgp1)"
  type        = string
  default     = "nyc3"
}

variable "droplet_name" {
  type        = string
  description = "Hostname / label of the Droplet"
  default     = "gatling-target"
}

variable "ssh_keys" {
  description = "SSH key fingerprints or IDs from DO Control Panel → Settings → Security"
  type        = list(string)
  default     = []
}

variable "image" {
  description = "Droplet image slug"
  type        = string
  default     = "ubuntu-22-04-x64"
}

variable "droplet_size" {
  description = <<-EOT
    Droplet size slug (plan + resources are defined by DO for each slug).
    - s-1vcpu-512mb-10gb — Basic / Regular, 1 vCPU, 512 MiB RAM, 10 GiB disk
    - s-2vcpu-2gb      — Basic / Regular, 2 vCPU, 2 GiB RAM, 60 GiB disk, ~3 TB transfer tier
    - g-2vcpu-8gb      — General Purpose / Regular, 2 vCPU, 8 GiB RAM, 25 GiB disk, ~4 TB transfer tier
  EOT
  type    = string
  default = "s-1vcpu-512mb-10gb"

  validation {
    condition = contains([
      "s-1vcpu-512mb-10gb",
      "s-2vcpu-2gb",
      "g-2vcpu-8gb",
    ], var.droplet_size)
    error_message = "droplet_size must be one of: s-1vcpu-512mb-10gb, s-2vcpu-2gb, g-2vcpu-8gb."
  }
}
