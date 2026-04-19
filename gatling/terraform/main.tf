# Size = var.droplet_size (Basic s-1vcpu-512mb-10gb, Basic s-2vcpu-2gb, or General Purpose g-2vcpu-8gb)
resource "digitalocean_droplet" "app" {
  name   = var.droplet_name
  region = var.region
  size   = var.droplet_size
  image  = var.image
  ipv6     = false
  backups  = false
  monitoring = true

  ssh_keys = var.ssh_keys
}
